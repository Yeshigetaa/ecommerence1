<?php
use App\Models\Catagory1;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\controllers\Catagory1Controller;
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
Route::get('/Catagory1/register',[Catagory1Controller::class,'register'])->name('Catagory1/register');
Route::post('/Catagory1/register',[Catagory1Controller::class,'store']);
Route::get('/Catagory1/list', [Catagory1Controller::class, 'get_all'])->name('Catagory1/list');
Route::get('/Catagory1/edit/{id}', [Catagory1Controller::class, 'edit']);
Route::post('/Catagory1/update',[Catagory1Controller::class,'update'])->name('Catagory1/update')->name('Catagory1/update');
Route::get('/Catagory1/delete/{id}', [Catagory1Controller::class, 'delete']);
Route::get('/Catagory1/search/{id}', [Catagory1Controller::class, 'search'])->name('Catagory1/search');
Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/search/{id}', [ProductController::class, 'search'])->name('product/search');
Route::get('/product/register',[productController::class,'register'])->name('product/register');
Route::post('/product/register',[ProductController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');