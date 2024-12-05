<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryComponent extends Component
{
    // View variables
    public $categories = [];

    //Variables for Creation
    public $createForm = true, $name;

    public function mount()
    {
        $this->categories();
    }

    public function categories()
    {
        $this->categories = Category::orderBy('order','asc')->get();
    }

    public function render()
    {
        return view('livewire.category-component');
    }

    public function updateCategoryOrder($categoryIds)
    {
        foreach ($categoryIds as $categoryId) {
            Category::where('id',$categoryId['value'])->update(['order' => $categoryId['order']]);
        }
        $this->categories();
    }

    public function create()
    {
        $this->createForm = !$this->createForm;
    }

    public function store()
    {
        Category::create([
            'name' => $this->name,
        ]);
        $this->reset(['createForm','name']);
        $this->categories();
    }
}
