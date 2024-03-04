<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:250',
        'email' => 'required|email|max:250|unique:users',
        'password' => 'required|min:6',
        'password_confirmation' => 'required_with:password|same:password|min:6'
    ];

    public function render()
    {
        return view('livewire.user.register');
    }

    public function register()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        Auth::attempt($credentials);
        session()->regenerate();

        session()->flash('success', 'You have successfully registered and logged in!');


        return redirect()->route('profile');
    }
}
