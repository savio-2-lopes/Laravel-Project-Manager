<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('api')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string',
    //     ]);
    //     $credentials = $request->only('email', 'password');

    //     $token = Auth::attempt($credentials);
    //     if (!$token) {
    //         return view('error.404');
    //     }

    //     $user = Auth::user();
    //     return view('home', [
    //         'status' => 'success',
    //         'user' => $user,
    //         'authorisation' => [
    //             'token' => $token,
    //             'type' => 'bearer',
    //         ]
    //     ]);
    //     // return response()->json([
    //     //     'status' => 'success',
    //     //     'user' => $user,
    //     //     'authorisation' => [
    //     //         'token' => $token,
    //     //         'type' => 'bearer',
    //     //     ]
    //     // ]);

    // }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'avatar' => 'string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $request->avatar,
            'password' => Hash::make($request->password),
        ]);

        $token = Auth::login($user);
        return view('home', [
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'User created successfully',
        //     'user' => $user,
        //     'authorisation' => [
        //         'token' => $token,
        //         'type' => 'bearer',
        //     ]
        // ]);
    }

    public function logout()
    {
        Auth::logout();
        return view('home', [
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Successfully logged out',
        // ]);
    }

    public function refresh()
    {
        return view('home', [
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
        // return response()->json([
        //     'status' => 'success',
        //     'user' => Auth::user(),
        //     'authorisation' => [
        //         'token' => Auth::refresh(),
        //         'type' => 'bearer',
        //     ]
        // ]);
    }
}
