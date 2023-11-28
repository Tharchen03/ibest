<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    // declar properties
    public $name = '';
    public $email = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.create-customer');
    }
    // creating C-CRUD
    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers',

        ]);
        Customer::create($validated);
        $this->reset();
        session()->flash('success','customer Created');
        return $this->redirect('/customers',navigate:true);

        // dd($this->all());
    }
}
