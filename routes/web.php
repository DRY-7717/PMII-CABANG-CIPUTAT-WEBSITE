<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardProgramController;
use App\Http\Controllers\AllCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LoginController;
use App\Models\CategoryProgram;
use App\Models\User;


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
    return view('home', [
        'title' => 'PMII Cabang Ciputat | Home',

    ]);
});

Route::get('/team', function () {
    return view('team', [
        'title' => 'PMII Cabang Ciputat | Team',
    ]);
});

Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/program/{program:slug}', [ProgramController::class, 'show']);


Route::get('/login',[LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/dashboard',function ()
{
    return view('dashboard.index',[
        'title' => 'PMII Cabang Ciputat : Dashboard'
    ]);
})->middleware('auth');


Route::get('/dashboard/program/checkslug', [DashboardProgramController::class,'checkslug'])->middleware('auth');
Route::resource('/dashboard/program', DashboardProgramController::class)->middleware('auth');

Route::get('/dashboard/categoryprogram/checkslug', [AllCategoryController::class,'checkslug'])->middleware('auth');
Route::resource('/dashboard/categoryprogram',AllCategoryController::class)->middleware('admin');