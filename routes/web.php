<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Hotel\HotelList;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Dashboard::class);
Route::get('/hotel', HotelList::class);
