<?php

namespace App\Livewire;

use App\Models\User;
// use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    // public $customers = [];
    public $search = [];

    // public function mount() {
    //     $this->customers = User::all();
    // }

    public function render()
    {
        // dd(Auth::user()->name);
        if (!$this->search) {
            // $this->customers = User::all();
            $customers = User::paginate(5);
        } else {
            // $this->customers = User::where('name', 'like', '%'.$this->search.'%')->get();
            $customers = User::where('name', 'like', '%'.$this->search.'%')->paginate(5);
        }
        return view('livewire.customers', ['customers' => $customers]);
    }

    public function delete(User $id)
    {
        $id->delete();
        session()->flash('success', 'User Delete Successfully.');
        return $this->redirect('/customers', navigate:true);
    }
}
