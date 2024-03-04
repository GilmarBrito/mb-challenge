<?php

namespace App\Livewire\User;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.user.login');
    }

    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->flash('success', 'You have successfully logged in!');

            return $this->redirectIntended();
        }

        return redirect()->route('login')
            ->with('error', 'Your provided credentials do not match in our records.');
    }
}
