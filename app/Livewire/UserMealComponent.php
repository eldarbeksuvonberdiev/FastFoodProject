<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class UserMealComponent extends Component
{
    //View variables
    public $categories;

    public function mount()
    {
        $this->categories = Category::orderBy('order','asc')->limit(6)->get();
        View::share('categories', $this->categories);
    }

    public function render()
    {
        return view('livewire.user-meal-component')->layout('components.layouts.user-meal');
    }
}
