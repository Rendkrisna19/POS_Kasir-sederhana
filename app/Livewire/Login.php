<?php

namespace App\Http\Livewire; use Livewire\Component; use Illuminate\Support\Facades\Auth; use
    Illuminate\Support\Facades\Hash; use App\Models\User; class Login extends Component { public $email, $password;
    protected $rules=[ 'email'=> 'required|email',
    'password' => 'required',
    ];

    public function authenticate()
    {
    $this->validate();

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
    return redirect()->route('pos'); // Redirect ke halaman POS setelah login sukses
    } else {
    session()->flash('error', 'Email atau Password salah!');
    }
    }

    public function render()
    {
    return view('livewire.login');
    }
    }