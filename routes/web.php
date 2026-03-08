<?php

use Illuminate\Support\Facades\Route;
//basic routing
Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/slmt', function () {
    return 'SELAMAT DATANG!';
});

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

