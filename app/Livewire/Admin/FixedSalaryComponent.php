<?php

namespace App\Livewire\Admin;

use App\Models\Attendance;
use App\Models\Employee;
use Carbon\Carbon;
use Livewire\Component;

class FixedSalaryComponent extends Component
{
    //view variables
    public $employees = [], $workTimes = [], $month, $year;

    public function mount()
    {
        $this->month = now()->format('m');
        $this->year = now()->format('Y');

        $this->employees = Employee::all();
        foreach ($this->employees as $employee) {
            $this->workTimes[$employee->id] = $this->countWorkHours($employee);
        }
        // dd($this->workTimes);
    }

    public function countWorkHours(Employee $employee)
    {
        $attendances = Attendance::where('employee_id', $employee->id)
            ->whereMonth('date', $this->month)
            ->whereYear('date', $this->year)
            ->get();
        $totalSeconds = 0;
        foreach ($attendances as $attendance) {
            $timeParts = explode(':', $attendance->overall_time);
            $seconds = ((int)$timeParts[0] * 3600) + ((int)$timeParts[1] * 60) + (int)$timeParts[2];
            $totalSeconds += $seconds;
        }

        $totalHours = $totalSeconds / 3600;
        // dd($totalHours,$employee->salary_amount / $employee->overall_work);
        return ['hours' => $totalHours, 'salary' => $totalHours * ($employee->salary_amount / $employee->overall_work)];
    }

    public function render()
    {
        return view('livewire.admin.fixed-salary-component');
    }

    public function selectDate($date)
    {
        $this->month = Carbon::parse($date)->format('m');
        $this->year = Carbon::parse($date)->format('Y');
        $this->employees = Employee::all();
        foreach ($this->employees as $employee) {
            $this->workTimes[$employee->id] = $this->countWorkHours($employee);
        }
        // dd($date);
    }
}
