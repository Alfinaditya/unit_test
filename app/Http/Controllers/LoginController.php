<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()
    {
        return view('0017login', []);
    }

    public function action(Request $request)
    {
        if ($user = User::where(['email' => $request->email])->first()) {
            if (Hash::check($request->password, $user->password)) {
                Auth::attempt(["email" => $request->email, "password" => $request->password]);
                $request->session()->regenerate();
                return redirect('/');
            }
        }
    }
}
