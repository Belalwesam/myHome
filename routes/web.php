<?php

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\ListingsController;

#main landing page
Route::get('/', [MainController::class , 'index'])->name('myhome.index');
#about us page returns only hte about view with no data 
Route::view('/about' , 'main.about')->name('myhome.about');
#contact page
Route::view('/contact' , 'main.contect')->name('myhome.contact');


#register page 
Route::get('/register' , [RegisterController::class , 'registerPage'])->name('register.page');
#storing the user in the data base 
Route::post('/register-user' , [RegisterController::class , 'storeUser'])->name('register.store');


#login page
Route::get('/login' , [LoginController::class ,'loginPage'])->name('login');
#login attempt 
Route::post('/user-login' , [LoginController::class , 'loginAttempt'])->name('login.attempt');


//the dashboard of the user 
Route::get('/profile' , [DashboardController::class , 'dashboard'])->name('user.dashboard');

//storing a new listing 
Route::post('/add-listing' , [ListingsController::class , 'storeListing'])->name('listing.store');
//editing an existing listing 
Route::put('/listing/edit/{id}' , [ListingsController::class , 'editListing'])->name('listing.edit');
//deleting a listing 
Route::delete('/listing/{id}' , [ListingsController::class , 'destroy'])->name('listing.destroy');

//listings page 
Route::get('/listings' , [MainController::class , 'listings'])->name('main.listings');

//showing inivisual property datiles 
Route::get('/property/{id}' , [ListingsController::class , 'show'])->name('listing.show');

//searching for a property 
Route::post('/search' , [MainController::class , 'search'])->name('listings.search');