<?php

use Illuminate\Session\TokenMismatchException;
Route::get('admin/comment', [
    'as' => 'admin_comment',
    'uses' => 'Footask\Admin\Controllers\Admin\CommentAdminController@index'
]);

Route::get('admin/contact', [
    'as' => 'admin_contact',
    'uses' => 'Footask\Admin\Controllers\Admin\ContactAdminController@index'
]);
Route::get('admin/faq', [
    'as' => 'admin_faq',
    'uses' => 'Footask\Admin\Controllers\Admin\FAQAdminController@index'
]);
Route::get('admin/post', [
    'as' => 'admin_post',
    'uses' => 'Footask\Admin\Controllers\Admin\PostAdminController@index'
]);
Route::get('admin/project', [
    'as' => 'admin_project',
    'uses' => 'Footask\Admin\Controllers\Admin\ProjectAdminController@index'
]);
Route::get('admin/task', [
    'as' => 'admin_task',
    'uses' => 'Footask\Admin\Controllers\Admin\TaskAdminController@index'
]);
Route::get('admin/template', [
    'as' => 'admin_template',
    'uses' => 'Footask\Admin\Controllers\Admin\TemplateAdminController@index'
]);
