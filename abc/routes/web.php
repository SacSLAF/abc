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
    Route::get('/user', function () {
        if (!auth()->check()) {
            return redirect('/login');
        }
        return app(UserController::class)->index();
    })->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('home.dashboard');
});

// login route and when user is already logged in then redirect to user page
Route::get('/login', function () {
    if (auth()->check()) {
        return redirect('/user');
    }
    return app(UserController::class)->login();
})->name('login');
Route::post('/login', [UserController::class, 'loginAction'])->name('login.action');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerAction'])->name('register.action');
// Route::get('/logout',[UserController::class,'logout']);
Route::post('/logout', [UserController::class, 'logoutAction'])->name('logout.action');
