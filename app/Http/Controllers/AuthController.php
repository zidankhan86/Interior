<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.components.auth.login');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credential = $request->only(['email', 'password']);

        if (Auth::attempt($credential)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('app');
            } elseif (auth()->user()->role == 'admin') {
                return redirect()->route('home')->withSuccess('Login Success');
            }
        } else {
            return redirect()->back()->with(['error' => 'Invalid credentials. Please try again.']);
        }
    }

   

   
}
