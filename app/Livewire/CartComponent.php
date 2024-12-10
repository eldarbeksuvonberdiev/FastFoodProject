<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class CartComponent extends Component
{
    //View variables
    public $cart, $categories, $cartCount = 0, $cartMeals;

    public function mount()
    {
        $this->cart = session('cart', []);
        $this->cartCount = count($this->cart);
        $this->cartMeals = session('cart', []);
        $this->categories = Category::orderBy('order', 'asc')->limit(6)->get();
        View::share(['categories' => $this->categories, 'cartCount' => $this->cartCount]);
    }

    public function subtractOne($id)
    {
        $cart = session('cart', []);
        if ($cart[$id]) {
            $cart[$id]['quantity']--;
            if ($cart[$id]['quantity'] == 0) {
                unset($cart[$id]);
            }
        }
        session()->put('cart', $cart);
        $this->cart = session('cart', []);
        $this->cartCount = count($this->cart);
        $this->cartMeals = session('cart', []);
        $this->categories = Category::orderBy('order', 'asc')->limit(6)->get();
        View::share(['categories' => $this->categories, 'cartCount' => $this->cartCount]);
    }

    public function addOne($id)
    {
        $cart = session('cart', []);
        if ($cart[$id]) {
            $cart[$id]['quantity']++;
        }
        session()->put('cart', $cart);
        $this->cart = session('cart', []);
        $this->cartCount = count($this->cart);
        $this->cartMeals = session('cart', []);
        $this->categories = Category::orderBy('order', 'asc')->limit(6)->get();
        View::share(['categories' => $this->categories, 'cartCount' => $this->cartCount]);
    }

    public function deleteFromCart($id)
    {
        $cart = session('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        $this->cart = session('cart', []);
        $this->cartCount = count($this->cart);
        $this->cartMeals = session('cart', []);
        $this->categories = Category::orderBy('order', 'asc')->limit(6)->get();
        View::share(['categories' => $this->categories, 'cartCount' => $this->cartCount]);
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('components.layouts.user-meal');
    }

    public function createOrder()
    {
        $cart = session('cart',[]);
        
    }
}
