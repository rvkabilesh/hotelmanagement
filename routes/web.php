<?php
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;

Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::resource('/rooms','RoomController');
Route::resource('/available','AvailableRoom');
Route::resource('/clients','ClientController');
Route::resource('/currentClients','currentClientsController');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('Home', [AuthController::class, 'Home']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');