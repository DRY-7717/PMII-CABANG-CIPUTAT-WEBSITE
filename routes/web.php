<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AllCategoryController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardAllawardController;
use App\Http\Controllers\DashboardAllProgramController;
use App\Http\Controllers\DashboardAllnewsController;
use App\Http\Controllers\DashboardAlltalentController;
use App\Http\Controllers\DashboardAnggotaController;
use App\Http\Controllers\DashboardAwardController;
use App\Http\Controllers\DashboardCategoryProduct;
use App\Http\Controllers\DashboardMailcontroller;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardSecretaryController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
use App\Models\CategoryProgram;
use App\Models\News;
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
// * Team
Route::get('/team', function () {
    return view('team2', [
        'title' => 'PMII Cabang Ciputat | Team PMII Cabang Ciputat',
    ]);
});
Route::get('/teamkopri', function () {
    return view('teamkopri2', [
        'title' => 'PMII Cabang Ciputat | Team Kopri Cabang Ciputat',
    ]);
});
// * Kopri
Route::get('/kopri', function ()
{
    return view('kopri', [
        'title' => 'PMII Cabang Ciputat | Kopri'
    ]);
});

// * Program
Route::get('/programs', [ProgramController::class, 'index']);
Route::get('/program/{program:slug}', [ProgramController::class, 'show']);

// * News
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/searchpage', [NewsController::class, 'searchpage']);
Route::get('/news/{news:slug}', [NewsController::class, 'show']);

// * Award
Route::get('/award', [AwardController::class, 'index']);
Route::get('/award/{award:slug}', [AwardController::class, 'show']);

// * Mail
Route::get('/mails', [MailController::class, 'index']);
Route::get('/mails/{secretary:slug}', [MailController::class, 'show']);

// * Talent
Route::get('/talent', [ProductController::class,'index']);
Route::get('/talent/{product:slug}',[ProductController::class, 'show']);

// * Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
// Route::get('/login/forgotpassword', [LoginController::class, 'forgotpassword']);
// Route::post('/login/forgotpassword', [LoginController::class, 'sendlink']);
// Route::get('/login/resetpassword{token}', [LoginController::class, 'resetpassword'])->name('login.resetpassword');
// Route::post('/login/resetpassword', [LoginController::class, 'updatepassword']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// * Dashboard Admin
Route::post('/dashboard/anggota/importexcel', [DashboardAdminController::class, 'importexcel'])->middleware('admin');
Route::resource('/dashboard/anggota', DashboardAdminController::class)->middleware('admin');

// * All Program
Route::resource('/allprogram/program', DashboardAllProgramController::class)->middleware('admin');
// * All news
Route::get('/allnews/news', [DashboardAllnewsController::class, 'index'])->middleware('admin');
Route::get('/allnews/news/{news:slug}', [DashboardAllnewsController::class, 'show'])->middleware('admin');
Route::post('/allnews/news/destroy/{news:slug}', [DashboardAllnewsController::class, 'destroy'])->middleware('admin');

// * All Achievment
Route::get('/allaward/award', [DashboardAllawardController::class, 'index'])->middleware('admin');
Route::get('/allaward/award/{award:slug}', [DashboardAllawardController::class, 'show'])->middleware('admin');
Route::post('/allaward/award/destroy/{award:slug}', [DashboardAllawardController::class, 'destroy'])->middleware('admin');

// * All Talent
Route::resource('/alltalent/product', DashboardAlltalentController::class)->middleware('admin');


Route::get('/dashboard/program/checkslug', [DashboardProgramController::class, 'checkslug'])->middleware('auth');
Route::resource('/dashboard/program', DashboardProgramController::class)->middleware('auth');

// * Dashboard Category Admin
Route::get('/dashboard/categoryprogram/checkslug', [AllCategoryController::class, 'checkslug'])->middleware('auth');
Route::resource('/dashboard/categoryprogram', AllCategoryController::class)->middleware('admin');

// * Dashboard Category Product
Route::get('/dashboard/categoryproduct/checkslug', [DashboardCategoryProduct::class, 'checkslug'])->middleware('auth');
Route::resource('/dashboard/categoryproduct', DashboardCategoryProduct::class)->middleware('admin');

// * Dashboard News
Route::get('/dashboard/news/checkslug', [DashboardNewsController::class, 'checkslug'])->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');

// * Dashboard Award
Route::get('/dashboard/award/checkslug', [DashboardAwardController::class, 'checkslug'])->middleware('auth');
Route::resource('/dashboard/award', DashboardAwardController::class)->middleware('auth');

// * Dashboard Mail
Route::get('/mail/secretary/checkslug', [DashboardMailController::class, 'checkslug'])->middleware('auth');
Route::get('/mail/secretary/download/{secretary:slug}', [DashboardMailController::class, 'download']);
Route::resource('/mail/secretary', DashboardMailcontroller::class)->middleware('auth');
// * Dashboard Import Anggota
Route::get('/import/anggotas/import', [DashboardAnggotaController::class, 'import'])->middleware('auth');
Route::post('/import/anggotas/importexcel', [DashboardAnggotaController::class, 'importexcel'])->middleware('auth');
Route::resource('/import/anggotas', DashboardAnggotaController::class)->middleware('auth');

//  * Dashboard Product
Route::get('/dashboard/product/checkslug', [DashboardProductController::class, 'checkslug'])->middleware('auth');
Route::resource('/dashboard/product', DashboardProductController::class)->middleware('auth');



// *  User Control
Route::get('/dashboard/user', [DashboardUserController::class, 'editpassword'])->middleware('auth');
Route::post('/dashboard/user/changepassword/{user:username}', [DashboardUserController::class, 'changepassword'])->middleware('auth');

// * Secretary
Route::resource('/dashboard/secretary', DashboardSecretaryController::class)->middleware('secretary');
