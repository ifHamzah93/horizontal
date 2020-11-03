<?php

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
Route::name('home')->get('/')->uses('WelcomeController@root');
Route::name('contact-us')->get('contact-us')->uses('WelcomeController@contact');
Route::name('register-consumer')->get('register-consumer')->uses('WelcomeController@register');
Route::name('blog')->get('blog')->uses('WelcomeController@blog');
Route::name('blog-detail-left')->get('blog-detail-left')->uses('WelcomeController@blog_detail_left');
Route::name('blog-detail-right')->get('blog-detail-right')->uses('WelcomeController@blog_detail_right');
Route::name('checkout')->get('checkout')->uses('WelcomeController@checkout');
Route::name('shop-detail')->get('shop-detail/{id}')->uses('WelcomeController@shop_detail');
Route::name('shop-detail-sidebar')->get('shop-detail-sidebar')->uses('WelcomeController@shop_detail_sidebar');
Route::name('shopgrid-sidebar')->get('shopgrid-sidebar')->uses('WelcomeController@shopgrid_sidebar');
Route::name('shoplisting-sidebar')->get('shoplisting-sidebar')->uses('WelcomeController@shoplisting_sidebar');
Route::name('cart')->get('cart')->uses('WelcomeController@cart');
Route::name('admin')->get('admin')->uses('Auth\LoginController@showLoginForm');
Auth::routes();
// Route::get('pages-login', 'SkoteController@index');
// Route::get('pages-login-2', 'SkoteController@index');
// Route::get('pages-register', 'SkoteController@index');
// Route::get('pages-register-2', 'SkoteController@index');
// Route::get('pages-recoverpw', 'SkoteController@index');
// Route::get('pages-recoverpw-2', 'SkoteController@index');
// Route::get('pages-lock-screen', 'SkoteController@index');
// Route::get('pages-lock-screen-2', 'SkoteController@index');
// Route::get('pages-404', 'SkoteController@index');
// Route::get('pages-500', 'SkoteController@index');
// Route::get('pages-maintenance', 'SkoteController@index');
// Route::get('pages-comingsoon', 'SkoteController@index');
// Route::post('keep-live', 'SkoteController@live');
Route::name('dashboard')->get('dashboard')->uses('HomeController@root');
Route::name('clear')->get('clear')->uses('HomeController@clear');
Route::name('whatsapp')->get('wa')->uses('HomeController@wa');
Route::resource('master-menu','MenuController');
Route::resource('master-roles','RolesController');
Route::resource('master-kategori','KategoriController');
Route::resource('master-produk','ProdukController');
Route::resource('master-users','UsersController');
Route::get('master-otori/{id}','OtoriController@index');
Route::resource('master-otori','OtoriController');
Route::name('FindMenu')->post('master-menu-find')->uses('MenuController@find');
Route::name('FindRoles')->post('master-roles-find')->uses('UsersController@find');
Route::name('FindProduk')->post('master-produk-find')->uses('ProdukController@find');
Route::name('produk.storeMedia')->post('produk/media')->uses('ProdukController@storeMedia');
Route::name('produk.deleteMedia')->post('produk/deleteMedia')->uses('ProdukController@deleteMedia');
Route::name('produk.storeEdit')->post('produk/storeEdit')->uses('ProdukController@storeEdit');
Route::name('any')->get('{any}')->uses('HomeController@index');
// php artisan route:clear
// php artisan cache:clear
// composer update