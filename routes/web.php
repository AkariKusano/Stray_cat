<?php

Route::get('top', function () {
    return view('stray.top');
});

// Route::get('signUp', function () {
//     return view('stray.signUp');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
