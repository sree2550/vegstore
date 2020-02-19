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

Route::get('/', function () {
    return view('home');
});
Route::get('/login', 'vegcontroller@login_show');
Route::get('/register', 'vegcontroller@register_show');

Route::get('/adplace', 'vegcontroller@place_show');
Route::post('/addplace', 'vegcontroller@add_places');

Route::get('/register', 'vegcontroller@place_list');

Route::post('/reg', 'vegcontroller@register');

Route::post('/log', 'vegcontroller@login_fun');

Route::get('/changepwd', 'vegcontroller@change_pwd');
Route::post('/change_pwd', 'vegcontroller@change_password');

Route::get('/additem', 'vegcontroller@addtable');
Route::post('/additemtbl', 'vegcontroller@add_item');

Route::get('/view', 'vegcontroller@view_data');
Route::get('editdata/{id}', 'vegcontroller@data_show');

Route::post('editdetails/', 'vegcontroller@update_datas');
Route::get('delete_data/{id}', 'vegcontroller@delete_fn');

Route::get('/show_all', 'vegcontroller@product_list');
Route::get('added_cart/{id}', 'vegcontroller@addedcart');
Route::get('/cart_show', 'vegcontroller@cartshow');

Route::get('/checkout', 'vegcontroller@checkout');

Route::get('minus/{id}', 'vegcontroller@minus_qty');
Route::get('plus/{id}', 'vegcontroller@plus_qty');
// Route::get('plus/{id}', 'vegcontroller@plus_qty');

Route::get('re-move/{id}', 'vegcontroller@remove_fn');
Route::get('update/{id}', 'vegcontroller@edit');

Route::get('/order_mngmt', 'vegcontroller@order_confirm');

Route::get('/view_bill/{id}', 'vegcontroller@bill_show');

Route::get('/confirm/{id}', 'vegcontroller@confirm_order');



