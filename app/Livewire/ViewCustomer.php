<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ViewCustomer extends Component
{
    public $customers = [];

    public function mount($id) {
        $this->customers = User::find($id);
    }

    public function render()
    {
        return view('livewire.view-customer');
    }
}
