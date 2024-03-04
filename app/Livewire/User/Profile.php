<?php

namespace App\Livewire\User;

use App\Models\User;
use App\Models\UserProfile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public string $email_alternative;
    public string $birthday;
    public string $tax_id;


    protected $rules = [
        'email_alternative' => 'required|email|max:250',
        'birthday' => 'date',
        'tax_id' => 'string|max:250',
    ];

    public function mount()
    {
        $this->user = Auth::user();
        $this->email_alternative = $this->user->profile->email_alternative ?? '';
        $this->birthday = $this->user->profile?->birthday ?
            Carbon::parse($this->user->profile->birthday)->format('Y-m-d') : '';
        $this->tax_id = $this->user->profile?->tax_id ?? '';
    }

    public function render()
    {
        return view('livewire.user.profile');
    }

    public function update()
    {
        $this->validate();

        $this->user->profile()->updateOrCreate(
            [
                'user_id' => $this->user->id,
            ],
            [
                'email_alternative' => $this->email_alternative,
                'birthday' => $this->birthday,
                'tax_id' => $this->tax_id,
            ]
        );

        $credentials = [
            'email' => $this->user->email,
            'password' => $this->user->password,
        ];

        Auth::attempt($credentials);

        session()->regenerate();
        session()->flash('success', 'You have successfully updated!');

        return redirect()->route('profile');
    }
}
