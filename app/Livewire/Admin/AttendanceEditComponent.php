<?php

namespace App\Livewire\Admin;

use App\Models\Attendance;
use Livewire\Component;

class AttendanceEditComponent extends Component
{

    public function mount(Attendance $attendance)
    {
        dd($attendance);
    }

    public function render()
    {
        return view('livewire.admin.attendance-edit-component');
    }
}
