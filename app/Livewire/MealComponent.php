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
    public $createForm = false, $meals = [], $editForm = false;

    //Variables for create
    public $category_id, $name, $price, $image, $categories = [];

    //Variables for edit
    public $editCategory_id, $editName, $editPrice, $editImage, $editionForm;

    public function mount()
    {
        $this->getProducts();
    }

    public function getProducts()
    {
        $this->meals = Meal::orderBy('order', 'asc')->get();
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
        $filePath = $this->image->store('images', 'public');
        // dd($filePath);
        Meal::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'price' => $this->price,
            'image' => $filePath
        ]);
        $this->reset(['createForm', 'category_id', 'name', 'price', 'image']);
        $this->getProducts();
    }

    public function delete(Meal $meal)
    {
        $meal->delete();
        $this->getProducts();
    }

    public function updateMealOrder($mealIds)
    {
        foreach ($mealIds as $mealId) {
            Meal::where('id', $mealId['value'])->update(['order' => $mealId['order']]);
        }
        $this->getProducts();
    }
}
