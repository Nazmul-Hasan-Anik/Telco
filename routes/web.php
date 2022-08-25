<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

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


 Route::get('categories', [CategoryController::class,"index"]);
   Route::get('add-categories', [CategoryController::class,"add"]);
   Route::post('insert-categories', [CategoryController::class,"insert"]);
   Route::get('edit_cat/{id}',[CategoryController::class,'edit'])->name('edit.cat');
   Route::put('update_cat/{id}', [CategoryController::class, 'update']);
   Route::get('delete_cat/{id}',[CategoryController::class,'delete'])->name('delete.cat');

});
