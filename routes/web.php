<?php

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

Route::get('/', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/admin', function () {
    return redirect()->route('admin_dashboard');
});

Route::prefix('admin')->group(function () {

    Route::middleware(['auth'])->group(function () {

        Route::middleware(['checkAdmin'])->group(function () {
            Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin_dashboard');
            Route::get('/support', [App\Http\Controllers\admin\SupportController::class, 'index'])->name('support');
            Route::get('/admin_users', [App\Http\Controllers\admin\UsersController::class, 'index'])->name('admin_users');
            Route::get('/admin_articles', [App\Http\Controllers\admin\ArticlesController::class, 'index'])->name('admin_articles');
            Route::get('/answ/{id}', [App\Http\Controllers\admin\SupportController::class, 'answer'])->name('answ');
            Route::post('/answer/{id}', [App\Http\Controllers\admin\SupportController::class, 'post_answer'])->name('answer');
        });
    });
});

Route::get('/home', [App\Http\Controllers\frontend\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [App\Http\Controllers\frontend\ProductsController::class, 'individual'])->name('product');
Route::get('/publish', [App\Http\Controllers\frontend\PublishController::class, 'index'])->name('publish');
Route::get('/publications_images/{product_id}', [App\Http\Controllers\frontend\PublishController::class, 'images'])->name('publications_images');
Route::post('/setMainImage', [App\Http\Controllers\frontend\PublishController::class, 'setMainImage'])->name('setMainImage');
Route::post('/upload_property_picture', [App\Http\Controllers\frontend\PublishController::class, 'store_files'])->name('upload_property_picture');
Route::post('/upload_property_picture2', [App\Http\Controllers\frontend\PublishController::class, 'store_files2'])->name('upload_property_picture2');
Route::post('/deleteImage/{id}', [App\Http\Controllers\frontend\PublishController::class, 'deleteImage'])->name('deleteImage');
Route::post('/setMainImage', [App\Http\Controllers\frontend\PublishController::class, 'setMainImage'])->name('setMainImage');
Route::get('/cart', [App\Http\Controllers\frontend\CartController::class, 'index'])->name('cart');
Route::post('/changeProductQuantity', [App\Http\Controllers\frontend\CartController::class, 'changeProductQuantity'])->name('changeProductQuantity');
// Route::get('cartAction', 'frontend\CartController@carritoAction')->name('cartAction');
Route::get('/cartAction/{id}', [App\Http\Controllers\frontend\CartController::class, 'carritoAction'])->name('cartAction');

Route::post('/contact/{id}', [App\Http\Controllers\frontend\ProductsController::class, 'contact'])->name('contact');

// Route::post('changeProductQuantity','frontend\CartController@changeProductQuantity')->name('changeProductQuantity');
// Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
// Route::post('setMainImage', 'frontend\PublishController@setMainImage')->name('setMainImage');

Route::post('/publish_product', [App\Http\Controllers\frontend\PublishController::class, 'publish_product'])->name('publish_product');


//catgorie
Route::get('/category/{id}', [App\Http\Controllers\frontend\CategoryController::class, 'index'])->name('category');



// Profile
Route::get('/profile', [App\Http\Controllers\frontend\ProfileController::class, 'index'])->name('profile');
Route::get('/edit_profile', [App\Http\Controllers\frontend\ProfileController::class, 'edit_profile'])->name('edit_profile');

Route::post('/store', [App\Http\Controllers\frontend\ProfileController::class, 'store'])->name('store');
Route::get('/user_profile/{id}', [App\Http\Controllers\frontend\ProfileController::class, 'user_profile'])->name('user_profile');

// Route::get('/product', [App\Http\Controllers\frontend\ProfileController::class, 'index'])->name('product');

