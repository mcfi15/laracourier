<?php

namespace App\Livewire\Admin\Staff;

use Livewire\Component;

class Index extends Component
{
    
    public function closeModal(){
        $this->resetInput();
    }

    public function openModal(){
        $this->resetInput();
    }


    public function render()
    {
        $staffs = Staff::orderBy('id', 'desc')->paginate(10);
        return view('livewire.admin.staff.index', ['staffs' => $staffs])
            ->extends('layouts.admin-dash')
                    ->section('content');
    }
}

