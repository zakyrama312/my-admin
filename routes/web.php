<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Hotel\HotelCreate;
use App\Livewire\Hotel\HotelEdit;
use App\Livewire\Hotel\HotelList;


Route::get('/', Dashboard::class);
Route::get('/hotel', HotelList::class);
Route::get('/hotel/create', HotelCreate::class);
Route::get('/hotel/{id}/edit', HotelEdit::class);
