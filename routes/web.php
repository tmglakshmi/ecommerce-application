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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
}); 
//Route::get('/welcomepage',Basecontroller::class); 
Route::get('/cart', function () {
    return view('cart');
}); 

Route::get('/catalog-list-page', function () {
    return view('catalog-list-page');
}); 

Route::get('/checkout', function () {
    return view('catalog-list-page');
}); 

Route::get('/product-detail', function () {
    return view('product-detail');
}); 


Route::get('/register', function () {
    return view('register');
}); 


Route::get('/blank-page', function () {
    return view('blank-page');
}); 

Route::get('/bootsrap-components', function () {
    return view('bootstrap-components');
}); 


Route::get('/charts', function () {
    return view('charts');
}); 


Route::get('/form-custom', function () {
    return view('form-custom');
}); 

Route::get('/form-components', function () {
    return view('form-components');
}); 


Route::get('/form-samples', function () {
    return view('form-sampless');
}); 


Route::get('/form-notifications', function () {
    return view('form-notifications');
}); 


Route::get('/index2', function () {
    return view('index2');
}); 

Route::get('/index1', function () {
    return view('index1');
}); 

Route::get('/page-calendar', function () {
    return view('page-calendar');
}); 


Route::get('/page-error', function () {
    return view('page-error');
}); 


Route::get('/page-invoice', function () {
    return view('page-invoice');
});  

Route::get('/page-lockscreen', function () {
    return view('page-lockscreen');
}); 


Route::get('/page-login', function () {
    return view('page-login');
}); 


Route::get('/page-mailbox', function () {
    return view('page-mailbox');
}); 


Route::get('/page-user', function () {
    return view('page-user');
}); 


Route::get('/read-mail', function () {
    return view('read-mail');
}); 


Route::get('/table-basic', function () {
    return view('table-basic');
}); 


Route::get('/table-data-table', function () {
    return view('table-data-table');
}); 


Route::get('/ui-cards', function () {
    return view('ui-cards');
}); 


Route::get('/widgets', function () {
    return view('widgets');
});