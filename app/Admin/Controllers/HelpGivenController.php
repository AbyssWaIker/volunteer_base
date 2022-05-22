<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Destitute\DestituteHelper;
use App\Admin\Actions\Destitute\PrintPDFLink;
use App\Admin\Exporters\DestituteExporter;
use App\Models\Destitute;
use App\Models\DestituteCategory;
use App\Models\HelpGiven;
use Carbon\Carbon;
use Encore\Admin\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Illuminate\Database\Eloquent\Builder;
use App\Rules\UniquenesForDestitute;
use Jenssegers\Date\Date;

class HelpGivenController extends ModelController
{
    protected $model = HelpGiven::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Нуждающиеся';

    protected function quickCreateCallback(): callable
    {
        return function (Grid\Tools\QuickCreate $form) {
//            $form->/*multipleSelect*/text('destitutes[0][categories][]', __('categories'))
//                ->attribute('style', 'display:none')
//                ->options(DestituteCategory::pluckNameAndID())
//                ->default(Destitute::REFUGEE_ID)
//                ->value(Destitute::REFUGEE_ID)
//            ;
//            $form->text('destitutes[0][reference_id]',__('reference_id'))->inputmask(['9999-9999999999']);
//            $form->text('destitutes[0][name]', __('name'))->required();
//            $form->text('destitutes[0][passport_id]', __('passport_id'));
            $form->text('address', __('address'));
//            $form->text('destitutes[0][phone]', __('phone'));
////            $form->text('destitutes[0][id_code]', __('id_code'));
//            $form->text('destitutes[0][comment]', __('comment'));
//            $form->date('hg_timestamp',__('Receivings'))->default(Carbon::today());
//            $form->text('_remove_')->attribute('style', 'display:none');
        };
    }
    protected function filterCallBack(): callable
    {
        $model = ($this->getModel());
        $table = (new DestituteCategory)->getTable();
        return function(Grid\Filter $filter) use($table) {
            $filter->disableIdFilter();
            $filter->column(1/2, function (Grid\Filter $filter) {
                $filter->like('name', __('Name'));
                $filter->like('phone', __('phone'));
                $filter->like('address', __('address'));
                $filter->like('id_code', __('id_code'));
                $filter->where(function(Builder $query) {
                    switch($this->input) {
                        case '1':
                            $query->whereHas('destitutes',null,'<', 2);
                        case '*':
                            $query->whereHas('destitutes', null, '>', 1);
                        case '':
                        default:
                            return;
                    }

                }, __('family_members'), 'familiy_count')
                    ->radio([
                        '' => __('all'),
                        '1' => __('single person'),
                        '*' => __('multiple people'),
                    ]);
            });

            $filter->column(1/2, function (Grid\Filter $filter) use($table) {
                $filter->like('comment', __('comment'));
                $filter->like('reference_id', __('reference_id'));
                $filter->where(function(Builder $query) use($table) {
                    $query->whereHas('categories', function (Builder $query) use ($table) {
                        $query->whereIn("$table.id", $this->input);
                    });
                }, 'Категории', 'categories')
                    ->multipleSelect(DestituteCategory::pluckNameAndID());

                $filter->date('hg_timestamp', 'Дата');

                $filter->where(function(Builder $query) {
                    $is_child = function (Builder $query){
                        $query->where('year_of_birth', '>', Carbon::today()->subYears(16)->year);
                    };
                    switch($this->input) {
                        case '1':
                            $query->whereHas('destitutes',$is_child);
                        case '0':
                            $query->whereHas('destitutes',$is_child, '<', 1)->dd();
                        default:
                            return;
                    }
                }, __('has children'),'children')
                    ->radio([
                        '' => __('all'),
                        '1' => __('has children'),
                        '0' => __('no children'),
                    ]);
            });
        };
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = parent::grid();
        $grid->model()->with(['destitutes', 'destitutes.categories']);
//
        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->prepend(new PrintPDFLink);
            $actions->prepend(new DestituteHelper);
        });

//        $grid->exporter(new DestituteExporter($grid, $this->getModel(), $this->title));
        $grid->header(function($filtered){
            $all = ($this->model)::query()->with(['destitutes']);
            $all_count = $all->get()->map->destitutesCount->sum();
            $today_count = $all->whereDate('hg_timestamp', Carbon::today())->get()->map->DestitutesCount->sum();
            $people_helped = __('Today we helped :number of people', ['number' => $today_count]);
            $people_found = __('Found :number of people', ['number' => $all_count]);
            return <<<HTML
<div class='col-lg-4 pull-right'>Для добавления семьи используй форму по ссылке <i class='fa fa-arrow-up' aria-hidden='true'></i>, чтобы указать членов семьи</div>
<div>
    <h3 class='text-black text-center'>$people_helped</h3>
    <h3 class='text-black text-center'>$people_found</h3>
</div>
<div class='pull-left'>Для добавления одного человека используй <i class='fa fa-arrow-down' aria-hidden='true'></i> быстрое добавление</div>
HTML;
        });
        $getFirstDestituteAttribute = function (string $atrribute):callable {
            return function () use($atrribute):?string {
                $d = $this->destitutes->first();
                if (!$d) {
                    return null;
                }
                return $d->$atrribute;
            };
        };
        $grid->column('reference_id',__('reference_id'))->display($getFirstDestituteAttribute('reference_id'));
        $grid->column('passport_id', __('passport_id'))->display($getFirstDestituteAttribute('passport_id'));
        $grid->column('address', __('address'));
        $grid->column('phone', __('phone'))->display($getFirstDestituteAttribute('phone'));
        $grid->column('family_members_count',__('family_members'))
            ->display(function ($test) {return$this->destitutesCount;})
            ->expand(function ($help) {
                return $help->destitutes->map(function (Destitute $d):string{return $d->__toString();})->implode('<br/>');
            });
        $grid->column('comment', __('comment'))->display($getFirstDestituteAttribute('comment'));
        $grid->column('hg_timestamp',  __('Date'))
            ->display(
                function ()
                {
                    return $this->destitutes->first()->receivings
                        ->map->hg_timestamp
                        ->map(function (string $date){
                            return Date::parse($date)->format('j F Y');
                        })
                        ->implode(',<br/>');
                }
            );
        return $grid;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0): Form
    {
        $form = parent::form($id);

        $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        $form->text('address', __('address'));
        $form->hasMany('destitutesPivot', __('family'), function(\Encore\Admin\Form\NestedForm $form) {
            $form->hidden('destitute[id]', __('categories'));
            $form->hidden('destitute[categories]', __('categories'))/*->options(DestituteCategory::pluckNameAndID())*/->default(Destitute::REFUGEE_ID);
            $form->text('destitute[reference_id]',__('reference_id'))->inputmask(['9999-9999999999'])->creationRules([new UniquenesForDestitute]);
            $form->text('destitute[name]', __('name'))->required();
            $form->text('destitute[passport_id]', __('passport_id'))->creationRules([new UniquenesForDestitute]);
            $form->text('destitute[phone]', __('phone'))->creationRules([new UniquenesForDestitute]);
            $form->date('destitute[date_of_birth]', __('date_of_birth'));
            $form->text('destitute[comment]', __('comment'));
        });
        return $form;
    }
}
