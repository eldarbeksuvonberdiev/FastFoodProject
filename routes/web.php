<?php

use App\Livewire\User\ByCategoryComponent;
use App\Livewire\User\CartComponent;
use App\Livewire\Admin\CategoryComponent;
use App\Livewire\Admin\DepartmentComponent;
use App\Livewire\Admin\EditEmployeeComponent;
use App\Livewire\Admin\EmployeeComponent;
use App\Livewire\Admin\EmployeeCreateComponent;
use App\Livewire\Admin\MealComponent;
use App\Livewire\Admin\OrderComponent;
use App\Livewire\Admin\UserComponent;
use App\Livewire\User\UserMealComponent;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin routes
Route::get('/',CategoryComponent::class)->name('category');
Route::get('/meal',MealComponent::class)->name('meal');
Route::get('/order',OrderComponent::class)->name('order');
Route::get('/user',UserComponent::class)->name('user');
Route::get('/department',DepartmentComponent::class)->name('department');
Route::get('/employee',EmployeeComponent::class)->name('employee');
Route::get('/employee-create',EmployeeCreateComponent::class)->name('employee-create');
Route::get('/employee-edit/{employee}',EditEmployeeComponent::class)->name('employee-edit');


//User routes
Route::get('/user-meal',UserMealComponent::class);
Route::get('/byCategory/{category}',ByCategoryComponent::class);
Route::get('/cart',CartComponent::class);