<?php

use App\Livewire\User\ByCategoryComponent;
use App\Livewire\User\CartComponent;
use App\Livewire\Admin\CategoryComponent;
use App\Livewire\Admin\DepartmentComponent;
use App\Livewire\Admin\EmployeeComponent;
use App\Livewire\Admin\MealComponent;
use App\Livewire\Admin\OrderComponent;
use App\Livewire\Admin\UserComponent;
use App\Livewire\User\UserMealComponent;
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