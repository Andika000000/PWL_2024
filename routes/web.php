<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/hello', function () {
    return'Hello Word';
});

Route::get('/hello', function () {
    echo'<h1>Hello Word</h1>';

});

Route::get('/word', function () {
    return'Word';
});

Route::get('/', function () {
    return'Selamat Datang';
});

Route::get('/about', function () {
    echo'<h1>Muhammad Andika Satrio Wibowo</h1>';
    echo'<p>2141762039</p>';
});

Route::get('/user/{Andika}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId){
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles{article}/ids/{id}', function
($posArticle, $postId){
     return 'Artikel'.$posArticle." dengan Id: ".$postId;
});

Route::get('/mahasiswa', function (){
    $arrMahasiswa = ["Ojan", "Gadhis", "Lia", "Alex", "Dikki"];
    
    return view('Polinema.mahasiswa',['mahasiswa' => $arrMahasiswa]);
});