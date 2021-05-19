<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\RatingsController;
// use App\Http\Controllers\RegistrationController;
// use App\Http\Controllers\SessionsController;
// use App\Http\Controllers\DishesController;

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
})->name('home');

Route::middleware('auth')->group(function () { 

    Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy')->name('logout');

    Route::group(['middleware' => ['role:Administrator']], function () {

        Route::resource('users', UserController::class, ['except' => 'show']);
        Route::resource('dishes', 'App\Http\Controllers\DishesController', ['except' => 'show']);
    
    });
    
    Route::prefix('users')->group(function () {
        Route::name('users.')->group(function () {
            Route::get('{user}', 'App\Http\Controllers\UserController@show') 
                ->where('user', '[0-9]+')
                ->name('show');
        });
    });

    Route::resource('books', 'App\Http\Controllers\BooksController')->except(['update', 'edit']);

    Route::get('/getBooks/{date}/{diners}', 'App\Http\Controllers\BooksController@getBooks')->name('getBooks');
    Route::get('/getBooksAdmin/{date}/{idTable}', 'App\Http\Controllers\BooksController@getBooksAdmin')->name('getBooksAdmin');
    Route::resource('ratings', RatingsController::class)->except(['update', 'edit', 'show']);
});


Route::get('/register', 'App\Http\Controllers\RegistrationController@create')->name('register_form');
Route::post('register', 'App\Http\Controllers\RegistrationController@store')->name('register_send');

Route::get('/login', 'App\Http\Controllers\SessionsController@create')->name('login');
Route::post('login', 'App\Http\Controllers\SessionsController@store')->name('login_send');

Route::get('/menu', 'App\Http\Controllers\MenuController@index')->name('menu');


Route::prefix('dishes')->group(function () {
    Route::name('dishes.')->group(function () {
        Route::get('{dish}', 'App\Http\Controllers\DishesController@show') 
            ->where('dish', '[0-9]+')
            ->name('show');
    });
});

