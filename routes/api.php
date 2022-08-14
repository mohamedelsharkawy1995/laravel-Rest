<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::resource('meeting','MeetingController',[
    'except' => ['edit','create']
]);

route::resource('meeting/registeration','RegisterationController',[
    'only' => ['store','destory']
]);

route::post('user',[
    'uses' => 'AuthController@store'
]);

route::post('user/signin',[
    'uses' => 'AuthController@signin'
]);
