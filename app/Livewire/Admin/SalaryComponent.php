<?php

namespace App\Livewire\Admin;

use App\Models\Employee;
use Livewire\Component;

class SalaryComponent extends Component
{

    public function mount(Employee $employee)
    {   
        dd($employee);
    }

    public function render()
    {
        return view('livewire.admin.salary-component');
    }
}
