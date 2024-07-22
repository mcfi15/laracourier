<?php

namespace App\Livewire\Admin\Branch;

use App\Models\Branch;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $branch_code, $street, $city, $state, $country, $zip_code, $contact, $branch_id;

    public function rules(){
        return [
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'nullable|string',
            'country' => 'required|string',
            'contact' => 'nullable|string'
        ];
    }

    public function resetInput(){
        //$this->branch_code = null;
        $this->street = null;
        $this->city = null;
        $this->state = null;
        $this->zip_code = null;
        $this->country = null;
        $this->contact = null;
    }

    

    public function storeBranch(){

        $validatedData = $this->validate();
        $branch_code = 'BH-'.mt_rand(10000, 99999);
        Branch::create([
            // $branch_code = mt_rand(1000000000, 9999999999),
            'branch_code' => $branch_code,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'country' => $this->country,
            'contact' => $this->contact

        ]);
        session()->flash('message', 'Branch added successfully');
        $this->dispatch('close-modal');
        $this->resetInput();
    }

    public function editBranch(int $branch_id){

        $this->branch_id = $branch_id;
        $branch = Branch::findOrFail($branch_id);
        $this->street = $branch->street;
        $this->street = $branch->street;
        $this->city = $branch->city;
        $this->state = $branch->state;
        $this->zip_code = $branch->zip_code;
        $this->country = $branch->country;
        $this->contact = $branch->contact;
    }

    public function updateBranch(){
        $validatedData = $this->validate();
        Branch::findOrFail($this->branch_id)->update([
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'country' => $this->country,
            'contact' => $this->contact

        ]);
        session()->flash('message', 'Branch updated successfully');
        $this->dispatch('close-modal');
        $this->resetInput();
    }

    public function deleteBranch($branch_id){
        $this->branch_id = $branch_id;
    }

    public function destroyBranch(){ 
        
        $branch = Branch::find($this->branch_id);
        // $path = 'uploads/category/'.$bank->image;
        //     if(File::exists($path)){
        //         File::delete($path);
        //     }
        $branch->delete();
        session()->flash('message', 'Data deleted successfully');
        $this->dispatch('close-modal');
    }


    public function closeModal(){
        $this->resetInput();
    }

    public function openModal(){
        $this->resetInput();
    }


    public function render()
    {
        $branches = Branch::orderBy('id', 'desc')->paginate(10);
        return view('livewire.admin.branch.index', ['branches' => $branches])
            ->extends('layouts.admin-dash')
                    ->section('content');
    }
}
