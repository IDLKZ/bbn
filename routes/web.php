<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GetConsultationController;
use App\Http\Controllers\HelpFundsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoDrugController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\UserListController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/new/{alias}', [MainController::class, 'singleNew'])->name('singleNew');
Route::get('/about-fund', [MainController::class, 'about'])->name('aboutFund');


Route::group(['middleware' => ['auth', 'auth_check']], function () {

    Route::group(['middleware' => 'admin'], function (){
        Route::get('home', [HomeController::class, 'index'])->name('home');
        Route::resource('news', NewsController::class);
        Route::resource('partners', PartnersController::class);
        Route::resource('points', PointsController::class)->only(['index', 'show', 'destroy']);
        Route::put('change-status-point/{id}', [PointsController::class, 'changeStatus'])->name('changeStatusPoint');
        Route::resource('infoDrugs', InfoDrugController::class)->only(['index', 'destroy']);
        Route::get('change-drug/{id}', [InfoDrugController::class, 'change'])->name('change-drug');
        Route::resource('getConsultations', GetConsultationController::class)->only(['index', 'destroy']);
        Route::get('change-consultation/{id}', [GetConsultationController::class, 'changeConsultation'])->name('change-consultation');
        Route::resource('helpFunds', HelpFundsController::class)->only(['index', 'destroy']);
        Route::get('change-funds/{id}', [HelpFundsController::class, 'changeFunds'])->name('change-funds');
        Route::resource('galleries', GalleryController::class)->only(['create', 'store', 'index', 'destroy']);
        Route::resource('abouts', AboutController::class)->only(['index', 'edit', 'update']);
        Route::resource('userLists', UserListController::class);
    });

    Route::get('cabinet', [MainController::class, 'index'])->name('cabinet');
    Route::get('bookmark', [CabinetController::class, 'bookmark'])->name('bookmark');
    Route::get('graffiti', [CabinetController::class, 'graffiti'])->name('graffiti');
    Route::get('smokes', [CabinetController::class, 'smokes'])->name('smokes');
    Route::post('set-bookmark', [CabinetController::class, 'setBookmark'])->name('setBookmark');
    Route::post('set-graffiti', [CabinetController::class, 'setGraffiti'])->name('setGraffiti');
    Route::post('set-smokes', [CabinetController::class, 'setSmokes'])->name('setSmokes');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

