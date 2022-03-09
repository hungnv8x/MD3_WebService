<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::prefix('blog')->group(function (){
    Route::get('/index',[BlogController::class,'index'])->name('blogs.list');
    Route::get('{id}/update',[BlogController::class,'edit'])->name('blogs.edit');
    Route::post('{id}/update',[BlogController::class,'update'])->name('blogs.update');
    Route::get('{id}/delete',[BlogController::class,'destroy'])->name('blogs.delete');
    Route::get('/create',[BlogController::class,'create'])->name('blogs.create');
    Route::post('/create',[BlogController::class,'store'])->name('blogs.store');
});
