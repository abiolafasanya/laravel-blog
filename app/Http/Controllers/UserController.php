<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/')->with('success', ' loggedIn successfully');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

     /**
     * Signup the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        $formInput = $request->validate([
            "name" => "required|min:3", 
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed|min:6"
        ]);
        $formInput['password'] = bcrypt($formInput['password']);
        User::create($formInput);

        return redirect('/login')->with('success', 'User registration successfull you can now login');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return \redirect('/')->with('success', 'You have successfully loggedOut');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
