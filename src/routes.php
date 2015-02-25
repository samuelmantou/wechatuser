<?php
/**
 * Created by PhpStorm.
 * User: chaogao
 * Date: 2/21/15
 * Time: 11:58 PM
 */

Route::get('user/register', 'Wechat\User\UserController@create');
Route::get('user/login', 'Wechat\User\UserController@login');
Route::get('user/logout', 'Wechat\User\UserController@logout');