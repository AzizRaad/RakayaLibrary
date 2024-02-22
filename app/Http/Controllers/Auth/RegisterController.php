<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $req)
    {
        $data = $req->safe()->all();
        $data['password']= Hash::make($data['password']);
        $user = User::create($data);
        auth()->login($user);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('auth.register');
    }
}
