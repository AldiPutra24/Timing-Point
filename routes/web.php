<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\PostSugestController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// return view('login/signin');
Route::get('/', function () {
    return view('welcome',[
        "title"=>'dashbroad']);
});


Route::get('/dashbroad', function () {
    return view('dashbroad.dashbroad',[
        "title"=>'dashbroad'
    ]);
});

Route::get('/harian', function () {
    return view('dashbroad.harian',[
        "title"=>'harian'
    ]);
});

Route::get('/isitugas', function () {
    return view('dashbroad.isitugas',[
        "title"=>'isitugas'
    ]);
});
Route::get('/notepad', function () {
    return view('dashbroad.notepad',[
        "title"=>'notepad'
    ]);
});
Route::get('/setting', function () {
    return view('dashbroad.setting',[
        "title"=>'setting'
    ]);
});


Route::get('/register', [loginController::class, 'register'])->name('register');
Route::post('/register', [loginController::class, 'registerpost'])->name('register');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginpost'])->name('login');
Route::post ('/logout', [loginController::class, 'logout'])->name('logout');
Route::post ('/postSugest', [PostSugestController::class, 'sugestpost'])->name('PostSugest');

// Route::get('/dashbroad',[loginController::class,'index']);
