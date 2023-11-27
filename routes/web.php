<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});
Route::resource('Products',ProductController::class);
/*
Products.index
URL: /Products
HTTP 方法: GET、HEAD
控制器&方法: ProductController@index
Products.store
URL: /Products
HTTP 方法: POST
控制器&方法: ProductController@store
Products.create
URL: /Products/create
HTTP 方法: GET、HEAD
控制器&方法: ProductController@create
Products.show
URL: /Products/{Product}
HTTP 方法: GET、HEAD
控制器&方法: ProductController@show
Products.update
URL: /Products/{Product}
HTTP 方法: PUT、PATCH
控制器&方法: ProductController@update
Products.destroy
URL: /Products/{Product}
HTTP 方法: DELETE
控制器&方法: ProductController@destroy
Products.edit
URL: /Products/{Product}/edit
HTTP 方法: GET、HEAD
控制器&方法: ProductController@edit
 */
