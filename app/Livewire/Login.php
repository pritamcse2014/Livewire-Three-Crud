<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function store(Request $request)
    {
        // dd($this->all());
        $validated = $this->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return $this->redirect('/customers', navigate:true);
        }
        $this->addError('email', 'Login Failed.');
    }
}
