<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Show appointment index     */
    public function index()
    {
            return view('appointment.index');
    }
    // public function index()
    // {
    //         $appointments = Appointment::all();
    //         return view('appointment\index', ['appointments' => $appointments]);
    // }

  //Show  Form
  public function create() {
    return view('appointment.create-mon');
}

public function display() {    
    $appointments=Appointment::all();         //
  return view('appointment.index' , ['appointments' => $appointments]);
}
    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request) {

        // dd(Appointment::all());

        $data = $request->validate([
            'first_name' => 'required',
            'gender' => 'required',
            'birth_date'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'service_type'=> 'required',
            'concern'=> 'required'
        ]);

       Appointment::create($data);

        return redirect('/appointment/index');
    }


    
    /**
     * Display the specified resource.
     */
    // public function show(Appointment $data) {
    //     return view('appointments.show' , [
    //         'appointment' => $data
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
