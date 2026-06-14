<?php

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-job', function () {
    dispatch(new TestJob());
    return "OK";
});
