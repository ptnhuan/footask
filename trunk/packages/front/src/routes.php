<?php

use Illuminate\Session\TokenMismatchException;
Route::get('/', [
    'as' => 'trang_chu',
    'uses' => 'Group_F\Front\Controllers\Front\FrontController@trangchu'
]);

Route::get('tin_tuc', [
    'as' => 'tin_tuc',
    'uses' => 'Group_F\Front\Controllers\Front\FrontController@tintuc'
]);
Route::get('lien_he', [
    'as' => 'lien_he',
    'uses' => 'Group_F\Front\Controllers\Front\FrontController@lienhe'
]);
Route::get('gioi_thieu', [
    'as' => 'gioi_thieu',
    'uses' => 'Group_F\Front\Controllers\Front\FrontController@gioithieu'
]);

