<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api'], function () {
    Route::post('/tools/demo', 'Tools\DemoController')->name('api.tools.demo');
});
