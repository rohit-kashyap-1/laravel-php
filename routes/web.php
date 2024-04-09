<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListItemController;

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

Route::get('/', [ListItemController::class,'Index'])->name('Index');

Route::post('/savetodo', [ListItemController::class,'SaveTodo'])->name('SaveTodo');

Route::post('/complete/{id}', [ListItemController::class,'Complete'])->name('Complete');

Route::post('/delete/{id}', [ListItemController::class,'Delete'])->name('Delete');


