<?php

use App\Livewire\CategoryComponent;
use App\Livewire\MealComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',CategoryComponent::class);
Route::get('/meal',MealComponent::class);