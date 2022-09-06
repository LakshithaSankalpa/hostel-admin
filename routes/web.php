<?php

use App\Http\Controllers\Article\ArticleController as AC;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControllers\DashboardController as DC;
use App\Http\Controllers\GuestRequestController as GRC;
use App\Http\Controllers\Notice\User\NUserController as NUC;
use App\Http\Controllers\Notice\Package\NPackageController as NPC;
use App\Http\Controllers\Notice\Subscriptions\NSubscriptionController as NSC;
use App\Http\Controllers\Profile\Package\PPackageController as PPC;
use App\Http\Controllers\Profile\Subscriptions\PSubscriptionController as PSC;
use App\Http\Controllers\Profile\User\PUserController as PUC;
use App\Http\Controllers\UserControllers\UserController as UC;

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

require __DIR__ . '/auth.php';

//dashboard
Route::get('/', DC::class)->name('dashboard');

//guest requests
Route::resource('guest_requests', GRC::class);

//articles
Route::resource('articles', AC::class);
