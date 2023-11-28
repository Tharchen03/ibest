<?php

use App\Livewire\Customers;
use App\Livewire\CreateCustomer;
use App\Livewire\EditCustomer;
use App\Livewire\Login;
use App\Livewire\NavBar;
use App\Livewire\Register;
use App\Livewire\ViewCustomer;
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

Route::get('/', function () {
    return view('welcome');
});

// router middleware
Route::middleware('auth')->group(function(){
    Route::get('/customers/create',CreateCustomer::class);
    Route::get('/customers',Customers::class);
    Route::get('/customers/{customer}',ViewCustomer::class);
    Route::get('/customers/{customer}/edit',EditCustomer::class);
});

Route::get('/register',Register::class);
Route::get('/login',Login::class)->name('login');
// Route::get('/logout',NavBar::class);

