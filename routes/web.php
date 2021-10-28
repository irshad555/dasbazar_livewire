<?php
use App\Http\Controllers\Seller\{
    DashboardController,
    ProductController,

    };

  
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
});
Route::get('/dashboard', function () {
    return view('seller.dashboard.index');
});
  Route::match(['get'],'manage/Products',[ProductController::class,'manageProducts'])
        ->name('manage.Products');
        Route::match(['get'],'manage/product-ajax',[ProductController::class,'manageProductsAjax'])
        ->name('manage.Products.ajax');


Route::get('/create',\App\Http\Livewire\Create::class)->name('product.create');
