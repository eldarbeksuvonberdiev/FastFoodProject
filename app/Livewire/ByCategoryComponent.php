<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class ByCategoryComponent extends Component
{

    //View variables
    public $categories,$meals;

    public function mount(Category $category)
    {
        $this->categories = Category::orderBy('order','asc')->limit(6)->get();
        View::share('categories', $this->categories);
        $this->meals = Meal::where('category_id',$category->id)->get();
    }

    public function render()
    {
        return view('livewire.by-category-component')->layout('components.layouts.user-meal');
    }
}
