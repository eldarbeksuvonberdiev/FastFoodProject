<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Meal;
use Livewire\Component;
use Livewire\WithFileUploads;

class MealComponent extends Component
{
    use WithFileUploads;
    //View variables
    public $createForm = false, $products = [], $editForm = false;

    //Variables for create
    public $category_id, $name, $price, $image, $categories = [];

    //Variables for edit
    public $editCategory_id, $editName, $editPrice, $editImage;

    public function mount()
    {
        $this->getProducts();
    }

    public function getProducts()
    {
        $this->products = Meal::orderBy('order', 'asc')->get();
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.meal-component');
    }

    public function create()
    {
        $this->createForm = !$this->createForm;
    }

    public function store()
    {
        $filePath = $this->image->store('images','public');        

        dd($filePath);

    }
}
