<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\TsmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeadsController;
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



Auth::routes();



	Route::get('/file-import',[UserController::class,
			'importView'])->name('import-view');
	Route::post('/import',[UserController::class,
			'import'])->name('import');
	Route::get('/export-users',[UserController::class,
			'exportUsers'])->name('export-users');



Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', function () {
       return view('admin.des');
    });

 });

 Route::group(['middleware' => ['auth','istsm']], function () {
    Route::get('tsm/deshboard/index', [TsmController::class, 'Deshbaord_index'])->name('tsm.Deshbaord.index');
    Route::get('tsm/create', [TsmController::class, 'create'])->name('tsm.create');
 });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [loginController::class, 'main_login'])->name('main.login');



Route::post('tsm/leadset', [LeadsController::class, 'importLeadSet'])->name('tsm.leadset');


Route::get('tsm/leadset/show', [LeadsController::class, 'leadsetshow'])->name('tsm.leadset.show');

