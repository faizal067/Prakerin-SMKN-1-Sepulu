<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Logbook;
use Livewire\Component;

class LogbookForm extends Component
{
    public Employee $employee;
    public $holiday;
    public $data;

    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }

    // NOTED: setiap method send logbook agar lebih aman seharusnya menggunakan if statement seperti diviewnya

    public function render()
    {
        return view('livewire.logbook-form');
    }
}
