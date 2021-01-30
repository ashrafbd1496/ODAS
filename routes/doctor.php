<?php

use Illuminate\Support\Facades\Route;


Route::get('test',function (){
    return "test";
});

Route::name('doctor.')->namespace('Doctor')->prefix('doctor')->group(function(){

    Route::namespace('Auth')->middleware('guest:doctor')->group(function(){

        //register route
        Route::get('/register','RegisterController@register')->name('register');
        Route::post('/register','RegisterController@processRegister')->name('processRegister');

//        //login route
       Route::get('/login','LoginController@login')->name('login');
        Route::post('/login','LoginController@processLogin');
    });
});
