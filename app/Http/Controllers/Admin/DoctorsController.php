<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Doctor;
use App\User;

class DoctorsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $doctors = $user->doctors()->get();
        
        return view('dashboard.doctors.index', 'doctors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();


        $doctor = new Doctor(array(
          'name'=>$request->get('name'),
          'email'=>$request->get('email'),
          'phone'=>$request->get('phone'),
          'address'=>$request->get('address'),
          'clinic_id'=>$request->get('clinic_id'),
          'user_id'=>$user_id,
        ));

        $clinic->save();
        return redirect('/dashboard/doctors/create')->with('status', 'Doctor has been Added Successfully!');
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
