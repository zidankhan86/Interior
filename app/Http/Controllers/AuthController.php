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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            if (auth()->user()->role == 'customer') {
                return redirect()->route('home');
            } elseif (auth()->user()->role == 'admin') {
                return redirect()->route('app')->withSuccess('Login Success');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
    }

   

    public function list()
    {
        $users = User::all();
        return view('backend.pages.userList',compact('users'));
    }
}
