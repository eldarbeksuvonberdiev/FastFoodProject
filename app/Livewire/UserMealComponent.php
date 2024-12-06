<?php

namespace App\Livewire;

use Livewire\Component;

class UserMealComponent extends Component
{
    public function render()
    {
        return view('livewire.user-meal-component')->layout('components.layouts.user-meal');
    }
}
