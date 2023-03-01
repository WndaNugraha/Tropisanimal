<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\artikelcontroller;
use App\Http\Controllers\visimisicontroller;
use App\Http\Controllers\beritacontroller;
use App\Http\Controllers\galericontroller;
use App\Http\Controllers\blogartikelcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kontakcontroller;
use App\Http\Controllers\Kontak2Controller;
use App\Http\Controllers\FileManagerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/apa', function () {
    return view('frontend.apa');
});


Route::get('/main', function () {
    return view('layouts.main');
});

route::get('/', [HomeController::class, 'home']); 
route::get('/berita', [HomeController::class, 'berita']); 
route::get('/tentangkami', [HomeController::class, 'tentangkami']); 
route::get('/galeri', [HomeController::class, 'galeri']); 
route::resource('/kontak', kontakcontroller::class); 
route::get('/Showberita/{berita:slug}', [HomeController::class, 'showberita']); 
route::get('/Showartikel/{artikel:slug}', [HomeController::class, 'showartikel']); 


route::get('/dashboard/profile', [logincontroller::class, 'profile'])->middleware('auth');
route::get('/login', [logincontroller::class, 'index'])->middleware('guest')->name('login');
route::post('/login', [logincontroller::class, 'authenticate']);
route::get('/register', [registercontroller::class, 'index'])->middleware('guest')->name('register');
route::post('/register', [registercontroller::class, 'store']);
route::post('/logout', [logincontroller::class, 'logout']);


route::get('/dashboard', [dashboard::class, 'index'])->middleware('auth');
Route::resource('/dashboard/artikel', artikelcontroller::class)->middleware('auth');
Route::resource('/dashboard/visimisi', visimisicontroller::class)->middleware('auth');
Route::resource('/dashboard/berita', beritacontroller::class)->middleware('auth');
Route::resource('/dashboard/galeri', galericontroller::class)->middleware('auth');
Route::resource('/dashboard/kontaks', Kontak2Controller::class)->middleware('auth');
Route::resource('/dashboard/kategori', KategoriController::class)->middleware('auth');

//file Manager
Route::get('filemanager', [FileManagerController::class, 'index']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']],function(){
;
});

