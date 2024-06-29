<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrendController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
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



Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/partnerships', [MainController::class, 'partnerships'])->name('partnerships');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/singleServices{service}', [MainController::class, 'singleServices'])->name('singleServices');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blogDetail{blog}', [MainController::class, 'blogDetail'])->name('blogDetail');
Route::get('/career', [MainController::class, 'career'])->name('career');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/projectDetail', [MainController::class, 'projectDetail'])->name('projectDetail');



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'admin'])->name('admin');
        Route::resource('/service', ServiceController::class);
        Route::resource('/blog', BlogController::class);
        Route::resource('/brend', BrendController::class);
        Route::resource('/portfolio', PortfolioController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
