<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('customers/create', CreateCustomer::class);

Route::get('customers', Customers::class);