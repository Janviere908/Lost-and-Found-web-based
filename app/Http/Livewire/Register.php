<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{


    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


   

    public function saveUser()
    {
        $validatedData = $this->validate();

        User::create($validatedData);
    }




    public function render()
    {
        return view('livewire.register');
    }
}
