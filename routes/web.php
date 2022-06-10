<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/*Ofertas*/
Route::get('home-ofertas',[App\Http\Controllers\Admin\OfertasController::class, 'index'])->name('home-ofertas');
Route::get('add-ofertas',[App\Http\Controllers\Admin\OfertasController::class, 'create'])->name('add-ofertas');
Route::post('store-ofertas',[App\Http\Controllers\Admin\OfertasController::class, 'store'])->name('store-ofertas');
Route::get('edit-ofertas/{id}', [App\Http\Controllers\Admin\OfertasController::class, 'edit'])->name('edit-ofertas');
Route::put('update-ofertas/{id}', [App\Http\Controllers\Admin\OfertasController::class, 'update'])->name('update-ofertas');
Route::delete('delete-ofertas/{id}', [App\Http\Controllers\Admin\OfertasController::class, 'destroy'])->name('delete-ofertas');
/*Sliders*/
Route::get('home-destacados',[App\Http\Controllers\Admin\DestacadosController::class, 'index'])->name('home-destacados');
Route::get('add-destacados',[App\Http\Controllers\Admin\DestacadosController::class, 'create'])->name('add-destacados');
Route::post('store-destacados',[App\Http\Controllers\Admin\DestacadosController::class, 'store'])->name('store-destacados');
Route::get('edit-destacados/{id}', [App\Http\Controllers\Admin\DestacadosController::class, 'edit'])->name('edit-destacados');
Route::put('update-destacados/{id}', [App\Http\Controllers\Admin\DestacadosController::class, 'update'])->name('update-destacados');
Route::delete('delete-destacados/{id}', [App\Http\Controllers\Admin\DestacadosController::class, 'destroy'])->name('delete-destacados');

/*Sliders*/
Route::get('home-slide',[App\Http\Controllers\Admin\SliderController::class, 'index'])->name('home-slide');
Route::get('add-slide',[App\Http\Controllers\Admin\SliderController::class, 'create'])->name('add-slide');
Route::post('store-slide',[App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store-slide');
Route::get('edit-slide/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit-slide');
Route::put('update-slide/{id}', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update-slide');
Route::delete('delete-slide/{id}', [App\Http\Controllers\Admin\SliderController::class, 'delete'])->name('delete-slide');

/*Route::get('/', function () {
    return view('frontend.default');
});*/
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('default');

Route::get('/marcas', function () {
    return view('frontend.marcas');
});

Route::get('/dashboard', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/productos', [App\Http\Controllers\ProductController::class, 'index'])->name('productos');
Route::get('home-products',[App\Http\Controllers\ProductController::class, 'index2'])->name('home-product');
Route::get('add-product',[App\Http\Controllers\ProductController::class, 'create'])->name('add-product');
Route::post('store-product',[App\Http\Controllers\ProductController::class, 'store'])->name('store-product');
