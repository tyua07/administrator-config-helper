<?php

Route::group(['prefix' => 'api'], function () {
    //登录
    Route::resource('config', '\Yangyifan\Administrator\Config\Controller\ConfigController');
});


