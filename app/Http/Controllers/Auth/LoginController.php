<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi form input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors(['login_error' => 'Email atau Password salah!']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}