<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('auth.login');
    }


    public function login(LoginRequest $req)
    {
        $data = $req->safe()->all();
        if (auth()->attempt($data)) {
            return redirect('/');
        } else {
            return redirect()->route('login')->with('failure','Wrong Credentials , try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/login');
    }
}
