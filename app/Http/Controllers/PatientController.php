<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = \App\Patient::all();
        
        return view('admin/patients', ['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createpatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new \App\Patient;
        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->mobile = $request->mobile;
        $patient->address = $request->address;
        $patient->emergency_contact = $request->emergency_contact;
        $patient->save();
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 4;
        $password = str_random(8);
        $user->password = Hash::make($password);
        $user->save();
        
        $user->password = $password;
        Mail::to($user->email)->send(new DemoMail($user));
        

        return redirect('admin/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
