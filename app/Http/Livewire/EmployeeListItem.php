<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EmployeeListItem extends Component
{

    public $employeeId;
    public $employeeName;
    public $employeeFullName;

    public function getEmployeeProperty()
    {
        return Employee::find($this->employeeId);
    }

    public function deleteEmployee()
    {
        dd($this->employee);
    }

    public function render()
    {
        return view('livewire.employee-list-item');
    }
}
