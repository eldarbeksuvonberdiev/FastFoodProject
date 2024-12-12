<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthComponent extends Component
{
    //View variables
    public $phone, $password;
    public function render()
    {
        return view('livewire.auth-component')->layout('components.layouts.auth');
    }

    public function loginCheck()
    {
        if (Auth::attempt(['phone' => $this->phone, 'password' => $this->password])) {
            
        }
    }
}
