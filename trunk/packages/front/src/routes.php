<?php

use Illuminate\Session\TokenMismatchException;
Route::get('/', [
    'as' => 'trang_chu',
    'uses' => 'Footask\Front\Controllers\Front\FrontController@index'
]);

Route::get('tin_tuc', [
    'as' => 'tin_tuc',
    'uses' => 'Footask\Front\Controllers\Front\FrontController@tintuc'
]);
Route::get('lien_he', [
    'as' => 'lien_he',
    'uses' => 'Footask\Front\Controllers\Front\FrontController@lienhe'
]);
Route::get('gioi_thieu', [
    'as' => 'gioi_thieu',
    'uses' => 'Footask\Front\Controllers\Front\FrontController@gioithieu'
]);

