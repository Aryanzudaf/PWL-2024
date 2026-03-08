<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
//route tambahan
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
 'create', 'store', 'update', 'destroy'
]);
//basic routing
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'world';
});

Route::get('index', [PageController::class,'index']);
Route::get('about', [PageController::class,'about']);
Route::get('articles/{id}', [PageController::class,'articles']);
Route::get('/about', function () {
    return 'NIM:244207020060, Nama: Ryan';
});
//routing dengan parameter
Route::get('/user/{name}', function ($name) {
    return "nama saya:   $name!";
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});
//routing dengan parameter opsional
Route::get('/users/{name?}', function ($name = 'john') {
    return "Nama saya: $name";
});

//route greeting
Route::get('/greeting', [WelcomeController::class,'greeting']);