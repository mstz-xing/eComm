<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Fronted\FrontedController;
use App\Http\Controllers\Fronted\CartController;
use App\Http\Controllers\Fronted\CheckoutController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[FrontendController::class,'index']);

// Route::get('category',[FrontendController::class,'category']);


Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);
Route::get('category',[App\Http\Controllers\Frontend\FrontendController::class,'category']);
Route::get('view-category/{slug}',[App\Http\Controllers\Frontend\FrontendController::class,'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}',[App\Http\Controllers\Frontend\FrontendController::class,'productview']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('add-to-cart',[App\Http\Controllers\Frontend\CartController::class,'addProduct']); 
Route::post('delete-cart-item',[App\Http\Controllers\Frontend\CartController::class,'deleteProduct']); 
Route::post('update_cart',[App\Http\Controllers\Frontend\CartController::class,'updateCart']); 

Route::middleware(['auth'])->group(function(){
Route::get('cart',[App\Http\Controllers\Frontend\CartController::class,'viewCart']);
Route::get('checkout',[App\Http\Controllers\Frontend\CheckoutController::class,'index']);
Route::post('place-order',[App\Http\Controllers\Frontend\CheckoutController::class,'placeorder']);
});

Route::middleware(['auth','isAdmin'])->group(function(){
   //  Route::get('/dashboard', function () {
      
   //      return view('admin.index');
   //   }); 

   //   Route::get('categories', function () {
       
   //      return view('admin.category.index');
   //   });  
     
   //   Route::post('insert-category', function () {
       
   //      return view('admin.category.insert');
   //   });  
   
  

    Route::get('/dashboard','App\Http\Controllers\Admin\FrontendController@index');
    Route::get('categories','App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category','App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category','App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-prod/{id}',[CategoryController::class,'edit']);
    Route::get('delete-prod/{id}',[CategoryController::class,'destroy']);
    Route::put('update-category/{id}',[CategoryController::class,'update']);

    Route::get('products','App\Http\Controllers\Admin\ProductController@index');
    Route::get('add-products','App\Http\Controllers\Admin\ProductController@add');
    Route::post('insert-product','App\Http\Controllers\Admin\ProductController@insert');
    Route::get('edit-product/{id}',[ProductController::class,'edit']);
    Route::get('delete-product/{id}',[ProductController::class,'destroy']);
    Route::put('update-product/{id}',[ProductController::class,'update']);

    });