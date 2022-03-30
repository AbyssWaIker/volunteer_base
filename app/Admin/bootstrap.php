<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use Encore\Admin\Grid\Column;

Encore\Admin\Form::forget(['map', 'editor']);
Column::$displayers = array_merge(
    Column::$displayers,
    [
        'fixedBelongsToMany' => \App\Admin\Extentions\Grid\Displayers\BelongsToMany::class,
        'checkboxForBelongsToMany' => \App\Admin\Extentions\Grid\Displayers\Checkbox::class,
        'customMultipleSelect' => \App\Admin\Extentions\Grid\Displayers\MultipleSelect::class,
    ]
);
