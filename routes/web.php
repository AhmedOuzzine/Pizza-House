<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController ;
use Illuminate\Support\Facades\Auth;

use SebastianBergmann\Type\Parameter;

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

Route::get('/pizzas', [PizzaController::class, 'index'])->middleware('auth');
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('pizzas/create', [PizzaController::class, 'create']);
// route parameters wildcards
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->middleware('auth');
Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
