<?php

Route::get('/', 'PagesController@root')->name('root');
Auth::routes();//用户认证路由

