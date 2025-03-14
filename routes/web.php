<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test',['posts'=>Post::all()]);
});

Route::get('/create',[PostController::class,'create']);
Route::post('/store', [PostController::class, 'ourstore'])->name('store');
