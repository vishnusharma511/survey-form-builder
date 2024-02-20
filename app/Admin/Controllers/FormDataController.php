<?php

namespace App\Admin\Controllers;

use App\Models\Survey;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\FormData;
use Encore\Admin\Controllers\AdminController;

class FormDataController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FormData';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FormData());

        $grid->column('id', __('Id'));
        $grid->column('survey.title', __('Survey Name'))->display(function ($title) {
            return $title;
        });
        $grid->column('name', __('Name'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('company', __('Company'));
        $grid->column('services', __('Services'));
        $grid->column('created_at', __('Created at'))->date('Y-m-d');

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('name', 'Name');
            $filter->like('email', 'Email');
            $filter->equal('services', __('Services'))->select(array_combine(array_values(FormData::services), array_values(FormData::services)));
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(FormData::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('survey_id', __('Survey id'));
        $show->field('name', __('Name'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('company', __('Company'));
        $show->field('services', __('Services'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FormData());

        $surveys = Survey::pluck('title', 'id');
        $form->select('survey_id', __('Survey'))->options($surveys);

        $form->text('name', __('Name'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('company', __('Company'));
        $form->select('services', __('Services'))->options(array_combine(constant('App\Models\FormData::services'), constant('App\Models\FormData::services')));


        return $form;
    }
}
