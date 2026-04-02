<?php

use Illuminate\Support\Facades\Auth;
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

// Ruta principal - PÚBLICA
Route::get('/', 'MainController@index')->name('main');

// Ruta pública de productos - PÚBLICA
Route::get('/productos', 'MainController@productos')->name('tienda');

// RUTAS DEL PANEL DE MENU DESPLEGABLE (INFORMACION DE LA EMPRESA) - PÚBLICAS
Route::get('/historia', function () {
    return view('menu.historia');
})->name('historia');

Route::get('/misionvision', function () {
    return view('menu.misionvision');
})->name('misionvision');

Route::get('/valores', function () {
    return view('menu.valores');
})->name('valores');

Route::get('/productores', function () {
    return view('menu.productores');
})->name('productores');

Route::get('/ofertas', function () {
    return view('users.ofertas');
})->name('ofertas');

//FIN DE MENU DESPLEGABLE
Route::get('profile', 'ProfileController@edit')->name('profile.edit');

Route::put('profile', 'ProfileController@update')->name('profile.update');

// ✅ CARRITO - Agregar middleware 'auth' para requerir autenticación
Route::middleware('auth')->group(function () {
    Route::resource('products.carts', 'ProductCartController')->only(['store', 'destroy']);
});

Route::resource('carts', 'CartController')->only(['index']);

// Rutas de órdenes y pagos
Route::resource('orders', 'OrderController')
    ->only(['create', 'store'])
    ->middleware(['verified']);

Route::resource('orders.payments', 'OrderPaymentController')
    ->only(['create', 'store'])
    ->middleware(['verified']);

Auth::routes([
    'verify' => true
]);

// Route::get('/home', 'HomeController@index')->name('home');