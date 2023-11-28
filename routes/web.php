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
//Route::resource('Products',ProductController::class)->only([
//  'index','show','store','update','destroy'
//]);

Route::get('/', [ProductController::class, 'index'])->name("product.index");
Route::get('Products', [ProductController::class, 'index'])->name("products.index");
Route::get('Products/create', [ProductController::class, 'create'])->name("products.create");
Route::post('Products', [ProductController::class, 'store'])->name("products.store");
Route::get('Products/{product}/edit', [ProductController::class, 'edit'])->name("products.edit");
Route::patch('Products/{product}', [ProductController::class, 'update'])->name("products.update");
Route::delete('Products/{product}', [ProductController::class, 'destroy'])->name("products.destroy");

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




/*
 Blog / lara_0901 vs eshop 路由比較
 Blog admin開頭route URL
  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home.index");
    Route::get('posts', [AdminPostsController::class, 'index'])->name("posts.index");
    Route::get('posts/create', [AdminPostsController::class, 'create'])->name("posts.create");
    Route::post('posts', [AdminPostsController::class, 'store'])->name("posts.store");
    Route::get('posts/{post}/edit', [AdminPostsController::class, 'edit'])->name("posts.edit");
    Route::patch('posts/{post}', [AdminPostsController::class, 'update'])->name("posts.update");
    Route::delete('posts/{post}', [AdminPostsController::class, 'destroy'])->name("posts.destroy");
});
    eshop route
     Route::resource('Products', ProductController::class);
兩者區別
Blog and lara_0901
使用前綴方法(prefix)可以為組中的每個路由新增特定的 URI 前綴，用來權限管理
eshop
直接透過URI進入
7個Products路由作用
products.index
index
顯示所有產品的列表，用於查看所有可用產品。
products.show
show
顯示特定產品的詳細信息，用於查看單個產品的詳情。
products.create
create
顯示用於創建新產品的表單，用戶可以在這裡輸入必要的信息。
products.store
store
處理創建新產品的請求，將新產品的資訊存儲到資料庫中。
products.edit
edit
顯示用於編輯現有產品訊息的表單，用戶可以在這裡更新產品的內容。
products.update
update
處理編輯現有產品資訊的請求，將更新後的資訊保存到資料庫中。
products.destroy
destroy
處理刪除特定產品的請求，從資料庫中刪除相對應的產品記錄。
 *
 */
