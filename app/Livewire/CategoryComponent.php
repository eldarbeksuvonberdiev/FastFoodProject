<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    // View variables
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::orderBy('order','asc')->get();
    }

    public function render()
    {
        return view('livewire.category-component');
    }

    public function updateCategoryOrder($categoryIds)
    {
        dd($categoryIds);
    }
}
