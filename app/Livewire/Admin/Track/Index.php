<?php

namespace App\Livewire\Admin\Track;

use Livewire\Component;

class Index extends Component
{
    // $public $update_date, $update_time, $location, $cstatus, $remark;

    public function rules(){
        return [
            'search' => 'required|string',
        ];
    }

    public function searchParcel(){
        $search = Track::all();
        //return view('');
    }

    public function render()
    { 
        
        return view('livewire.admin.track.index')
                ->extends('layouts.admin-dash')
                ->section('content');
    }
}
