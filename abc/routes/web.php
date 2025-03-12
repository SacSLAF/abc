<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', function () {
    return view('welcome');
});

// all routes are protected by auth middleware
Route::middleware(['auth'])->group(function () {
    Route::resource('user', UserController::class);
    Route::get('/home',[HomeController::class,'index'])->name('home.index');
    // Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
});

// try yo go user when not logged in then redirect to login page
Route::get('/user', function () {
    if (!auth()->check()) {
        return redirect('/login');
    }
    return app(UserController::class)->index();
});

// login route and when user is already logged in then redirect to user page
Route::get('/login',function(){
    if(auth()->check()){
        return redirect('/user');
    }
    return app(UserController::class)->login();
})->name('login');
Route::post('/login',[UserController::class,'loginAction'])->name('login.action');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'registerAction'])->name('register.action');
// Route::get('/logout',[UserController::class,'logout']);
Route::post('/logout',[UserController::class,'logoutAction'])->name('logout.action');

