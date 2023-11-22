<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
  
  //Show  Form
  public function create() {
    $serviceTypes = [
        'For Kids',
        'For Adults',
        'For Pre-natal',
        'For Senior Citizen',
        'For PWD',
        'For Dental Checkup',
    ];
    return view('appointment.create-mon', compact('serviceTypes'));
}

// public function display() {    
//     $appointments=Appointment::all();         //
//   return view('appointment.index' , ['appointments' => $appointments]);
// }

    // public function store (Request $request) {
    //     // dd(Appointment::all());
    //     $data = $request->validate([
    //         // 'last_name' => 'required',
    //         'first_name' => 'required',
    //         'gender' => 'required',
    //         'birth_date'=> 'required',
    //         'phone'=> 'required',
    //         'address'=> 'required',
    //         'service_type'=> 'required',
    //         'concern'=> 'required'
    //     ]);
    //    Appointment::create($data);
    //     return redirect('/appointment/index');
    // }


    public function store(Request $request)
    {
        // dd(Appointment::all());
        $request->validate([
            'service_type' => 'required|in:For Kids,For Adults,For Pre-natal,For Senior Citizen,For PWD,For Dental Checkup',
            'appointment_date' => 'required|date',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'age' => 'required|string',
            'concern' => 'required|string',
        ]);

        $serviceType = $request->input('service_type');
        $appointmentDate = Carbon::parse($request->input('appointment_date'));
        $formattedDate = $appointmentDate->format('md');

        $queueNumber = Appointment::whereDate('appointment_date', $appointmentDate)
            ->where('service_type', $serviceType)
            ->count() + 1;

            $appointment = Appointment::create([
                'service_type' => $serviceType,
                'appointment_date' => $appointmentDate,
                'queue_number' => $queueNumber,
                'last_name' => $request->input('last_name'),
                'first_name' => $request->input('first_name'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'concern' => $request->input('concern'),
            ]);

        $formattedQueueNumber = $formattedDate . '-' . str_pad($queueNumber, 3, '0', STR_PAD_LEFT);

        return redirect('/appointment/index');
    }

    public function display()
    {
        // Retrieve all appointments from the database
        $appointments = Appointment::all();
        return  view('appointment.index', ['appointments' => $appointments]);
    }
    
    public function displaytoAdmin()
    {
        // Retrieve all appointments from the database
        // $appointments = Appointment::all();
        return  view('admin.adminAppointment', [
            'appointments' => Appointment::latest()->filter(request(['search']))->paginate(10)
    ]);
    }

    public function destroy(Appointment $appointment) {
        $appointment->delete();
           return redirect('/admin/adminAppointment');
    }
    

    // public function  adminRecords() {
    //     // $records = Record::all();
    //     return view('admin.adminAppointment', [
    //         'appointments' => Appointment::latest()->filter(request(['search']))->paginate(10)
    // ]);
    // }
    
    
}
