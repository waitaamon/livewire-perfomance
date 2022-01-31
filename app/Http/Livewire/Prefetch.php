<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Prefetch extends Component
{
    public $employee;

    public function loadEmployee()
    {
        sleep(1);
        $this->employee = Employee::find(1);
    }

    public function render()
    {
        return view('livewire.prefetch');
    }
}
