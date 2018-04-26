<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'site'], function () {
    Route::get('/', function () {

        return view('welcome');
    });

    Route::match(["get", "post"], '/admin/login', 'Admin\LoginController@login');
    Route::group(['middleware' => 'admin'], function () {
        Route::match(["get", "post"],'/admin/config/edit','Admin\ConfigController@edit');
        Route::get('/admin/index','Admin\IndexController@index');
        Route::get('/admin/password','Admin\IndexController@password');
        Route::get('/admin/quit','Admin\IndexController@quit');

        Route::get('/admin/site/index','Admin\SiteController@index');
        //菜单
        Route::get('/admin/menu/index','Admin\MenuController@index');
        Route::match(["get", "post"],'/admin/menu/create','Admin\MenuController@create');
        Route::match(["get", "post"],'/admin/menu/edit','Admin\MenuController@edit');
        Route::match(["get", "post"],'/admin/menu/dels','Admin\MenuController@dels');
        //管理员
        Route::get('/admin/admin/index','Admin\AdminController@index');
        Route::match(["get", "post"],'/admin/admin/create','Admin\AdminController@create');
        Route::match(["get", "post"],'/admin/admin/edit','Admin\AdminController@edit');
        Route::match(["get", "post"],'/admin/admin/dels','Admin\AdminController@dels');

        //管理员分组
        Route::get('/admin/admin_group/index','Admin\AdminGroupController@index');
        Route::match(["get", "post"],'/admin/admin_group/create','Admin\AdminGroupController@create');
        Route::match(["get", "post"],'/admin/admin_group/edit','Admin\AdminGroupController@edit');
        Route::match(["get", "post"],'/admin/admin_group/dels','Admin\AdminGroupController@dels');

        //新闻资讯分类
        Route::get('/admin/news_class/index','Admin\NewsClassController@index');
        Route::match(["get", "post"],'/admin/news_class/create','Admin\NewsClassController@create');
        Route::match(["get", "post"],'/admin/news_class/edit','Admin\NewsClassController@edit');
        Route::match(["get", "post"],'/admin/news_class/dels','Admin\NewsClassController@dels');

        //新闻资讯
        Route::get('/admin/news/index','Admin\NewsController@index');
        Route::match(["get", "post"],'/admin/news/create','Admin\NewsController@create');
        Route::match(["get", "post"],'/admin/news/edit','Admin\NewsController@edit');
        Route::match(["get", "post"],'/admin/news/dels','Admin\NewsController@dels');
    });
});