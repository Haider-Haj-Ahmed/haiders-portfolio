<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('haider');
});

Route::get('/corporate-haider', function () {
    return view('haider');
});
