<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Arena;

class ArenaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Залы кинотеатра';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Arena());
        $grid->model()->where('is_delete', 0);
        $grid->column('name', __('Название зала'));
        $grid->column('count_line', __('Количество рядов'));
        $grid->column('count_point', __('Количество мест в ряду'));
        $grid->column('get_count', __('Общее количество'));

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
        $show = new Show(Arena::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('name', __('Name'));
        $show->field('count_line', __('Count line'));
        $show->field('count_point', __('Count point'));
        $show->field('is_delete', __('Is delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Arena());

        $form->text('name', __('Название зала'))->required();
        $form->number('count_line', __('Количество рядов'))->default(3);
        $form->number('count_point', __('Количество мест в ряду'))->default(5);

        return $form;
    }
}
