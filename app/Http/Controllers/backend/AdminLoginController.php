<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.admin-login');
    }

    public function onLogin(Request $request)
    {

        $admin = Admins::where('email', $request->input('email'))->where('password', $request->input('password'))->first();
        if ($admin) {
            session()->put('id', $admin->id);
            session()->put('first_name', $admin->first_name);
            session()->put('last_name', $admin->last_name);
            session()->put('email', $admin->email);
            return redirect('/admin')->with('success', 'Login Success');
        } else {
            return redirect('admin/login')->with('error', 'Invalid Credentials.');
        }
    }

    public function logoutAdmin()
    {

        session()->forget('id');
        session()->forget('first_name');
        session()->forget('last_name');
        session()->forget('email');
        return redirect('/admin/login')->with('success', 'Logout Success');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (session()->has('email')) {
            return view('backend.admin-register');
        } else {
            return view('backend.admin-login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:admins,email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);

        // Create a new admin
        $admin = new Admins();
        $admin->email = $request->input('email');
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->contact = $request->input('phone');
        $admin->password = $request->input('password');
        // $admin->password = Hash::make($request->input('password'));
        $admin->save();

        if ($admin->save()) {
            Log::info('ad$admin updated successfully');
            return redirect()->route('backend.login')->with('success', 'ad$admin updated successfully');
        } else {
            Log::error('Failed to update ad$admin');
            return back()->with('error', 'Failed to update ad$admin');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
