<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\categoryContoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ShoppingController;

Route::get('/', function () {
    return view('welcome')->with(['products_fashion' => Product::where('category_id', 1)->get(), 'products' => Product::orderBy('id','asc')->take(5)->get()]);
})->name('welcome');
Route::get('/contact', function(){
    return view('frontend.contact');
})->name('contact');
Route::get('/about', function(){
    return view('frontend.about');
})->name('about-us');
Route::get('/wishlist', function(){
    return view('frontend.wishlist');
})->name('wishlist');


Route::get('/cart', [ShoppingController::class, 'index'])->name('cart');
Route::get('/cart/empty', [ShoppingController::class, 'empty'])->name('cart.empty');
Route::get('/cart/store/{slug}/{qty}', [ShoppingController::class, 'store'])->name('cart.store');
Route::get('/cart/incr', [ShoppingController::class, 'incr'])->name('cart.incr');
Route::get('/cart/decr', [ShoppingController::class, 'decr'])->name('cart.decr');
Route::get('/cart/remove/{id}', [ShoppingController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [ShoppingController::class, 'checkout'])->name('checkout');

//
Route::get('/test', function(){
    //return date('d,m,y');
    //    return App\Models\Profile::find(1)->user;
});

Route::get('/search', [frontEndController::class, 'search'])->name('search');
Route::get('/preview/{slug}', [frontEndController::class, 'preview'])->name('preview');



Route::get('/auth/{social}/redirect', [UsersController::class, 'redirect'])->name('socialite.redirect');

Route::get('/auth/{social}/callback', [UsersController::class, 'callback'])->name('socialite.callback');




Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');
});

Route::group(['middleware' => ['auth','verified'], 'prefix' => 'admin'], function () {
    Route::get('/', function(){
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/trashed', [ProductController::class, 'trashed'])->name('product.trashed');
    Route::get('/product/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/product/kill/{id}', [ProductController::class, 'kill'])->name('product.kill');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');


    Route::get('/categories', [categoryContoller::class, 'index'])->name('categories'); 
    Route::get('/category/create', [categoryContoller::class ,'create'])->name('category.create');
    Route::post('/category/store', [categoryContoller::class ,'store'])->name('category.store');

    Route::get('/category/edit/{id}', [categoryContoller::class, 'edit'])->name('category.edit');
    Route::get('/category/delete/{id}', [categoryContoller::class, 'destroy'])->name('category.delete');
    Route::post('/category/update/{id}',[categoryContoller::class, 'update'])->name('category.update'); 


    Route::get('/tags', [TagsController::class, 'index'])->name('tags');
    Route::post('/tag/store', [TagsController::class, 'store'])->name('tag.store');
    Route::post('/tag/update/{id}', [TagsController::class, 'update'])->name('tag.update');
    Route::get('/tag/edit/{id}', [TagsController::class, 'edit'])->name('tag.edit');
    Route::get('/tag/delete/{id}', [TagsController::class, 'destroy'])->name('tag.delete');
    Route::get('/tag/create', [TagsController::class, 'create'])->name('tag.create');

    Route::get('/users', [UsersController::class, 'index'])->name('users');
    Route::get('/user/delete/{id}', [UsersController::class, 'destroy'])->middleware('password.confirm')->name('user.delete');  
    Route::get('/user/create', [UsersController::class, 'create'])->name('user.create');
    Route::get('/user/trashed', [UsersController::class, 'trashed'])->name('user.trashed');
    Route::post('/user/store', [UsersController::class, 'store'])->name('user.store');

    Route::get('/user/admin/{id}', [UsersController::class, 'admin'])->middleware('is_admin:admin')->name('user.admin');
    Route::get('/user/not-admin/{id}', [UsersController::class, 'not_admin'])->middleware('is_admin:admin')->name('user.not.admin');


    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('setting.update');

});

require __DIR__.'/auth.php';
