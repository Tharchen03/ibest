<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    // public $customers = [];
    public $search = "";

    public function render()
    {
        if (!$this->search) {
            $customers = Customer::paginate(1);
        } else {
            $customers = Customer::where('name', 'like', '%' . $this->search . '%')->paginate(1);
        }
        // dd(Auth::user()->name);

        return view('livewire.customers', ['customers' => $customers,]);
    }
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('success', 'customer Deleted');
        return $this->redirect('/customers', navigate: true);
    }
    public function submitSearch()
    {
        // No need to perform the search here since Livewire will automatically update the $this->search property
        // You can add additional logic here if needed
    }
}


// public function render()
// {
//     if (!$this->search) {
//         $this->customers = Customer::paginate(1);
//     } else {
//         $this->customers = Customer::where('name', 'like', '%' . $this->search . '%')->paginate(1);
//     }
//     // dd(Auth::user()->name);

//     return view('livewire.customers');
// }
