<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\Registration;
use App\Livewire\ViewCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('customers/create', CreateCustomer::class);

    Route::get('customers', Customers::class);

    Route::get('customers/view/{id}', ViewCustomer::class);

    Route::get('customers/edit/{id}', EditCustomer::class);
});

Route::get('registration', Registration::class);