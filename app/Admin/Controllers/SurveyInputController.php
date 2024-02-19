<?php

namespace App\Admin\Controllers;

use App\Models\Survey;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\SurveyInputs;
use Encore\Admin\Controllers\AdminController;

class SurveyInputController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SurveyInputs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SurveyInputs());

        $grid->column('id', __('Id'));
        $grid->column('survey_id', __('Survey id'));
        $grid->column('key', __('Key'));
        $grid->column('type', __('Type'));
        $grid->column('is_required', __('Is required'));
        $grid->column('pattern', __('Pattern'));
        $grid->column('status', __('Status'));
        $grid->column('sort', __('Sort'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(SurveyInputs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('survey_id', __('Survey id'));
        $show->field('key', __('Key'));
        $show->field('type', __('Type'));
        $show->field('is_required', __('Is required'));
        $show->field('pattern', __('Pattern'));
        $show->field('status', __('Status'));
        $show->field('sort', __('Sort'));
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
        $form = new Form(new SurveyInputs());

        $surveys = Survey::pluck('title', 'id');

        $form->select('survey_id', __('Survey'))->options($surveys);

        $form->text('key', __('Key'));
        $form->text('type', __('Type'));
        $form->switch('is_required', __('Is required'));
        $form->text('pattern', __('Pattern'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
