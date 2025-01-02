<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $phone;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.registration');
    }

    public function store()
    {
        // dd($this->all());
        $validated = $this->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $user = User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        Auth::login($user);
        session()->flash('success', 'User Registration Successfully.');
        return $this->redirect('/customers', navigate:true);
    }
}
