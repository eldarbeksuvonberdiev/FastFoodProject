<?php

use App\Livewire\ByCategoryComponent;
use App\Livewire\CartComponent;
use App\Livewire\CategoryComponent;
use App\Livewire\DepartmentComponent;
use App\Livewire\EmployeeComponent;
use App\Livewire\MealComponent;
use App\Livewire\OrderComponent;
use App\Livewire\UserComponent;
use App\Livewire\UserMealComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin routes
Route::get('/',CategoryComponent::class);
Route::get('/meal',MealComponent::class);
Route::get('/order',OrderComponent::class);
Route::get('/user',UserComponent::class);
Route::get('/department',DepartmentComponent::class);
Route::get('/employee',EmployeeComponent::class);


//User routes
Route::get('/user-meal',UserMealComponent::class);
Route::get('/byCategory/{category}',ByCategoryComponent::class);
Route::get('/cart',CartComponent::class);