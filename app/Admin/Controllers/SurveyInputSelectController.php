<?php

namespace App\Admin\Controllers;

use App\Models\SurveyInputs;
use App\Models\SurveyInputSelect;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SurveyInputSelectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'SurveyInputSelect';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SurveyInputSelect());

        $grid->column('id', __('Id'));
        $grid->column('survey_input_id', __('Survey input id'));
        $grid->column('key', __('Key'));
        $grid->column('value', __('Value'));
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
        $show = new Show(SurveyInputSelect::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('survey_input_id', __('Survey input id'));
        $show->field('key', __('Key'));
        $show->field('value', __('Value'));
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
        $form = new Form(new SurveyInputSelect());

        $surveys = SurveyInputs::where('key','select')->pluck('name', 'id');
        $form->select('survey_input_id', __('Survey input'))->options($surveys);
        
        $form->text('key', __('Key'));
        $form->text('value', __('Value'));
        $form->switch('status', __('Status'))->default(1);
        $form->number('sort', __('Sort'));

        return $form;
    }
}
