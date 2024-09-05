<?php

namespace App\Livewire\Frontend\Contact;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

class Index extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function rules(){
        return (new ContactFormRequest())->rules();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function send(){
        $validated = $this->validate();
        Mail::to('support@contactmail.com')->send(new ContactMail($validated));
        $this->reset();
        session()->flash('message', 'Thanks for contacting us, we will get back to you soon');
    }
    
    public function render()
    {
        return view('livewire.frontend.contact.index')
        ->extends('layouts.app')
        ->section('title', 'Contact Page')
        ->section('content');
    }
}
