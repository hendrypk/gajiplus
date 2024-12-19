<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


//Get API
Route::get('/github/releases', [ApiController::class, 'getReleases']);
