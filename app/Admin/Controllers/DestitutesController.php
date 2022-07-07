<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Destitute\DestituteHelper;
use App\Admin\Actions\Destitute\PrintPDFForMedicalLink;
use App\Admin\Actions\Destitute\PrintPDFLink;
use App\Admin\Exporters\DestituteExporter;
use App\Models\Destitute;
use App\Models\Region;
use Carbon\Carbon;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Database\Eloquent\Builder;
use App\Admin\Helpers\GridHelper;
use App\Rules\UniquenesForDestitute;

class DestitutesController extends PersonController
{
    protected $model = Destitute::class;
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Нуждающиеся';

    protected function quickCreateCallback(): callable
    {
        return function (Grid\Tools\QuickCreate $form) {
            $form->/*multipleSelect*/text('categories[]', __('categories'))
                ->attribute('style', 'display:none')
                ->options($this->getAllCategories())
                ->default(Destitute::REFUGEE_ID)
                ->value(Destitute::REFUGEE_ID);
            ;
            $form->text('reference_id',__('reference_id'))->inputmask(['9999-9999999999']);
            $form->text('name', __('name'))->required();
            $form->text('passport_id', __('passport_id'));
            $form->multipleSelect('region_id', __('region'))->options(Region::pluckNameAndID());
            $form->text('address', __('address'));
            $form->text('phone', __('phone'));
//            $form->text('id_code', __('id_code'));
            $form->text('comment', __('comment'));
            $form->date('helpGiven[0][hg_timestamp]',__('Receivings'))->default(Carbon::today());
            $form->text('helpGiven[0][_remove_]')->attribute('style', 'display:none');
        };
    }
    protected function filterCallBack(): callable
    {
        $model = ($this->getModel());
        $table = (new $model->category_class)->getTable();
        return function(Grid\Filter $filter) use($table) {
            $filter->disableIdFilter();
            $filter->column(1/2, function (Grid\Filter $filter) {
                $filter->like('name', __('Name'));
                $filter->like('phone', __('phone'));
                $filter->like('address', __('address'));
                $filter->like('passport_id', __('passport_id'));
                // $filter->where(function(Builder $query) {
                //     switch($this->input) {
                //         case '1':
                //             $query->whereNull('family_members');
                //         case '*':
                //             $query->whereNotNull('family_members');
                //         default:
                //             return;
                //     }

                // }, __('family_members'), 'familiy_count')
                //     ->radio([
                //         '' => __('all'),
                //         '1' => __('single person'),
                //         '*' => __('multiple people'),
                //     ]);
                $filter->equal('region_id',__('region'))->select(Region::pluckNameAndID());
            });

            $filter->column(1/2, function (Grid\Filter $filter) use($table) {
                $filter->like('comment', __('comment'));
                $filter->like('reference_id', __('reference_id'));
                $filter->where(function(Builder $query) use($table) {
                    $query->whereHas('categories', function (Builder $query) use ($table) {
                        $query->whereIn("$table.id", $this->input);
                    });
                }, 'Категории', 'categories')
                    ->multipleSelect($this->getAllCategories());

                $filter->where(function(Builder $query) {
                    $query->whereHas('helpGiven', function (Builder $query) {
                        $query->whereDate('hg_timestamp', $this->input);
                    });
                }, 'Дата', 'date')->date();

                // $filter->where(function($query) {
                //     switch($this->input) {
                //         case '1':
                //             $query->whereJsonContains('family_members',['is_child'=> 1]);
                //         case '0':
                //             $query->whereNull('family_members')->orWhereJsonDoesntContain('family_members',['is_child'=> 1]);
                //         default:
                //             return;
                //     }

                // }, __('has children'),'children')
                //     ->radio([
                //         '' => __('all'),
                //         '1' => __('has children'),
                //         '0' => __('no children'),
                //     ]);
            });
        };
        return function(Grid\Filter $filter) {
            parent::filterCallBack()($filter);

        };
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid():Grid
    {
        $grid = parent::grid();
        $model = $this->getModel();
        $table = (new $model->category_class)->getTable();
        $grid->model()->with(['categories', 'helpGiven'])->whereDoesntHave('categories', function (Builder $query) use ($table) {
            $query->where("$table.id", Destitute::PACKAGE_ID);
        });

        $grid->actions(function(Grid\Displayers\Actions $actions) {
            $actions->disableView();
            $actions->prepend(new PrintPDFLink);
            $actions->prepend(new PrintPDFForMedicalLink);
            $actions->prepend(new DestituteHelper);
        });

        $grid->exporter(new DestituteExporter($grid, $this->getModel(), $this->title));
        $grid->header(function($filtered) use ($table){
            $today= ($this->model)::query()
                ->whereHas(
                    'helpGiven',
                    function (Builder $query) {
                        $query->whereDate('hg_timestamp', Carbon::today());
                    }
                )
                ->whereHas('categories', function (Builder $query) use ($table) {
                    $query->where("$table.id", '!=', Destitute::PACKAGE_ID);
                })
                ->get();
            $found = $filtered->get();
            $people_helped = __('Today we helped :families of families (:people of people)', ['families'=>$today->count(), 'people' => $today->sum('family_members_count'),]);
            $people_found = __('Found :families of families (:people of people)', ['families' => $found->count(), 'people' => $found->sum('family_members_count'),]);
            return <<<HTML
<div class='col-lg-4 pull-right'>Для добавления семьи используй форму по ссылке <i class='fa fa-arrow-up' aria-hidden='true'></i>, чтобы указать членов семьи</div>
<div>
    <h3 class='text-black text-center'>$people_helped</h3>
    <h3 class='text-black text-center'>$people_found</h3>
</div>
<div class='pull-left'>Для добавления одного человека используй <i class='fa fa-arrow-down' aria-hidden='true'></i> быстрое добавление</div>
HTML;
        });
        $grid->column('reference_id',__('reference_id'))->editable()->filter('like')->hideOnMobile();
        $grid->column('passport_id', __('passport_id'))->editable()->filter('like')->hideOnMobile();
        $grid->column('region.name', __('region'))->filter()->hideOnMobile();
	$grid->column('address', __('address'))->editable()->filter('like')->hideOnMobile();
        $grid->column('phone', __('phone'))->editable()->filter('like')->hideOnMobile();
        $grid->column('id_code', __('id_code'))->editable()->filter('like')->hideOnMobile();
        $grid->column('family_members_count',__('family_members'))
            ->display(function ($test) {return$this->family_members_count;})
            ->expand(function ($destitute) {
                $all_family = array_merge(
                    [$this->attributesToArray()],
                    $destitute->family_members ?: []
                );
                return GridHelper::arrayToList($all_family, function($member){return Destitute::familyMemberToString($member);});
            })
            ->hideOnMobile();
        $grid->column('comment', __('comment'))->editable()->hideOnMobile();
        $grid->column('helpGiven',  __('Receivings'))
            ->display(function (array $help) {return ($this->getModel())::getHelpHistory($help);})
            ->hideOnMobile();
        $grid->hideColumns(['categories', 'id_code']);
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id):Show
    {
        $show = parent::detail($id);

        $show->field('id', __('Id'));
        $show->field('last_name', __('Last Name'));
        $show->field('first_name', __('First Name'));
        $show->field('middle_name', __('Middle Name'));
        $show->field('address', __('address'));
        $show->field('passport_id', __('passport_id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = 0): Form
    {
        $form = parent::form($id);

        $form->multipleSelect('categories', __('categories'))->options($this->getAllCategories())->default([Destitute::REFUGEE_ID]);
        $form->text('reference_id',__('reference_id'))->inputmask(['9999-9999999999'])->creationRules([new UniquenesForDestitute]);
        $form->text('name', __('name'))->required();
        $form->text('passport_id', __('passport_id'))->creationRules([new UniquenesForDestitute]);
	$form->multipleSelect('region_id', __('region'))->options(Region::pluckNameAndID());
        $form->text('address', __('address'));
        $form->text('phone', __('phone'))->creationRules([new UniquenesForDestitute]);
        $form->text('id_code', __('id_code'));
        $form->text('comment', __('comment'));
        $form->table('family_members', __('family_members'), function(\Encore\Admin\Form\NestedForm $form) {
            $form->text('reference_id',__('reference_id'))->inputmask(['9999-9999999999']);
            $form->text('name',__('name'))->required();
            $form->text('passport_id', __('passport_id'));
            $form->text('phone', __('phone'));
            $form->date('date_of_birth', __('date_of_birth'));
            $form->text('comment', __('comment'));
        });
        $form->hasMany('helpGiven', 'Получила гуманитарную помощь', function(\Encore\Admin\Form\NestedForm $form){
            $form->hidden('id');
            $form->date('hg_timestamp', 'Время')->default(Carbon::now());
        })
        ->default([['hg_timestamp' => Carbon::now()]])
        ->data([['hg_timestamp' => Carbon::now()]])
        ->value([['hg_timestamp' => Carbon::now()]]);

        return $form;
    }
}
