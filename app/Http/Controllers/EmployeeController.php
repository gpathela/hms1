<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = \App\Employee::with('roles:id,name')->get();
        
        return view('admin/employees', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new \App\Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->address = $request->address;
        $employee->bio = $request->bio;
        $employee->role = $request->role;
        $employee->save();
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $password = str_random(8);
        $user->password = Hash::make($password);
        $user->save();
        
        $user->password = $password;
        Mail::to($user->email)->send(new DemoMail($user));
        

        return redirect('admin/employee');
        
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

    public function doctors()
    {
        
        $doctors = \App\Employee::where('role', 2)->get();
        return view('admin/doctors', ['doctors' => $doctors]);
    }

    public function nurses()
    {
        
        $nurses = \App\Employee::where('role', 3)->get();
        return view('admin/nurses', ['nurses' => $nurses]);
    }


}
