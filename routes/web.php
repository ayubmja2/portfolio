<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('landing');
});

Route::get('/liveprojects', function() {
    return view('liveprojects');
});

Route::get('/about', function(){
    return view('about');
});
