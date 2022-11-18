<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WeaponController;
use App\Models\Character;
use Illuminate\Http\Request;
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

Route::redirect('/', '/en/');

Route::prefix('{language}')->middleware('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::get('/', function () {return view('welcome');})->name('welcome');

    Route::get('/character', [CharacterController::class, 'show'])->name('character');
    Route::get('/character/search', [CharacterController::class, 'search'])->name('CharacterSearch');

    Route::get('/weapon', [WeaponController::class, 'show'])->name('weapon');
    Route::get('/weapon/search', [WeaponController::class, 'search'])->name('WeaponSearch');

    Route::get('/enemy', function () {return view('enemy');})->name('enemy');

    Route::get('/auditor', function () {return view('auditor');});

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


