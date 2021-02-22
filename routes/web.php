<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ========Praktikum1=======

// Route::get('/', function () {
//     echo ("Selamat Datang");
// });

// Route::get('/about', function () {
//     echo ("muhammad Riefki Ariyanto 1941270103");
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "halaman artikel ID ".$id;
// });

// ========Praktikum2=======

// Route::get('/',[HomeController::class,'home']);

// Route::get('/about/',[AboutController::class,'about']);

// Route::get('/article/{id}',[ArticleController::class,'article']);

// ========Praktikum3=======

    Route::get('/', function () {
    return '<a href="https://www.educastudio.com/">Home</a>';
    });

    Route::prefix('/products')->group(function () {
    Route::get('/edugame', [Praktikum3::class, 'edugame']);
    Route::get('/friendkids', [Praktikum3::class, 'friendkids']);
    Route::get('/storybooks', [Praktikum3::class, 'storybooks']);
    Route::get('/kidsongs', [Praktikum3::class, 'kidsongs']);
    });
   
    Route::get('/berita', [Praktikum3::class, 'berita']);

    Route::prefix('/program')->group(function () {
    Route::get('/karir', [Praktikum3::class, 'karir']);
    Route::get('/magang', [Praktikum3::class, 'magang']);
    Route::get('/industri', [Praktikum3::class, 'industri']);
   });

    Route::get('/about', function () {
    return '<a href="https://www.educastudio.com/about-us">about us</a>';
    });

     Route::resource('kontak', kontakController::class);