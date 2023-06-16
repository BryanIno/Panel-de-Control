<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    route::get('user/grafico',[UserController::class,'grafico'])->name('user.grafico');
    route::get('user/export',[UserController::class,'export'])->name('user.export');
    route::resource('user',UserController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
