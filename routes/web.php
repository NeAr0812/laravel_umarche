<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LifeCycleTestController;
// use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\ConfirmablePasswordController;
use App\Http\Controllers\User\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\User\Auth\EmailVerificationPromptController;
use App\Http\Controllers\User\Auth\NewPasswordController;
use App\Http\Controllers\User\Auth\PasswordResetLinkController;
use App\Http\ControllersUser\Auth\RegisteredUserController;
use App\Http\Controllers\User\Auth\VerifyEmailController;
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
    return view('user.welcome');
});

//laravel_breezeインストール時に追加される
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/servicecontainertest', [LifeCycleTestController::class, 'showServiceContainerTest']);



require __DIR__.'/auth.php';
