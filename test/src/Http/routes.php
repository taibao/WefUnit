<?php
Route::any('/index','SJunitController@index');
Route::any('/store','SJunitController@store')->name('junit.store');

//测试路由
Route::any('test','TestController@index');