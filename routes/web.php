<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutletController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/index');
    })->name('dashboard');

    Route::get('outlets',[OutletController::class,'allout'])->name('all.out');
Route::post('outlets',[OutletController::class,'storeout'])->name('store.out');
Route::get('outlets/{id}',[OutletController::class,'editout'])->name('edit.out');
Route::post('outlets/update/{id}', [OutletController::class, 'update'])->name("update.out");
Route::get('outlets/delete/{id}', [OutletController::class, 'delete'])->name("delete.out");
});
