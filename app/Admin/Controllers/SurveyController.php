<?php

namespace App\Admin\Controllers;

use App\Models\Survey;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\File;
use Encore\Admin\Controllers\AdminController;


class SurveyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Survey';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Survey());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('url', __('Url'));
        $grid->column('logo', __('Logo'));
        $grid->column('template', __('Template'));
        $grid->column('is_active', __('Is Active'))->display(function ($value) {
            return $value ? '<span class="badge success">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
        });
        $grid->column('created_at', __('Created at'));
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
        $show = new Show(Survey::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('url', __('Url'));
        $show->field('logo', __('Logo'));
        $show->field('template', __('Template'));
        $show->field('description', __('Description'));
        $show->field('is_active', __('Is active'));
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
        $form = new Form(new Survey());

        $form->text('title', __('Title'));
        $form->text('url', __('Url'));
        $form->text('logo', __('Logo'));
        $form->select('template', __('Template'))->options($this->getTemplateOptions());
        $form->textarea('description', __('Description'));
        $form->switch('is_active', __('Is active'))->default(1);

        return $form;
    }

    protected function getTemplateOptions()
    {
        $templates = [];

        $templateFiles = File::files(resource_path('views'));

        foreach ($templateFiles as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            $fileName = str_replace('.blade', '', $fileName);
            $templates[$fileName] = $fileName;
        }

        return $templates;
    }
}
