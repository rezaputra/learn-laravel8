<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [ProductsController::class, 'home'])->name('home');
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/about', [ProductsController::class, 'about']);
Route::get('/products/{id}/{name}', [ProductsController::class, 'show'])->where([
        'id' => '[0-9]+',
        'name' => '[a-zA-Z]+']);



    
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');
// Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');



// Route::get('users', function () {
//     return 'Welcome to user page';
// });

// Route::get('array', function () {
//     return ['1', 2, '3'];
// });

// Route::get('json', function () {
//     return response()->json([
//         'fname' => 'Reza',
//         'lname' => 'mardiansyah'
//     ]);
// });

// Route::get('redirect', function () {
//     return redirect('/');
// });