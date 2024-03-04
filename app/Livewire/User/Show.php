<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Show extends Component
{
    public User $user;
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:250',
        'password' => 'required|min:6',
        'password_confirmation' => 'required_with:password|same:password|min:6'
    ];

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.user.show');
    }

    public function update()
    {
        $this->validate();
        $this->user->update([
            'name' => $this->name,
            'password' => Hash::make($this->password)
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        Auth::attempt($credentials);

        session()->regenerate();
        session()->flash('success', 'You have successfully updated!');

        return redirect()->route('profile');
    }
}
