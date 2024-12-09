<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class CartComponent extends Component
{
    //View variables
    public $cart, $categories,$cartCount = 0, $cartMeals;

    public function mount()
    {
        $this->cart = session('cart', []);
        $this->cartCount = count($this->cart);
        $this->cartMeals = session('cart',[]);
        $this->categories = Category::orderBy('order', 'asc')->limit(6)->get();
        View::share(['categories' => $this->categories, 'cartCount' => $this->cartCount]);
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('components.layouts.user-meal');
    }
}
