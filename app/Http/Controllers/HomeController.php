<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $records = \App\Record::with(['doctors', 'nurses', 'patients'])->get();
        
        return view('admin/index', ['records' => $records]);
    }

    public function doctor()
    {
        $user = Auth::user();
        $doctor = \App\Employee::where('email', $user->email)->first();
        $records = \App\Record::where('doctor', $doctor->id)->get();        
        $fullRecord = $records->load('patients');
        dd($fullRecord);      
        return view('admin/index', ['records' => $records]);
    }

    public function nurse()
    {
        return view('nurse');
    }

    public function patient()
    {
        return view('patient');
    }

    public function it()
    {
        return view('it');
    }

    public function reception()
    {
        return view('reception');
    }
}
