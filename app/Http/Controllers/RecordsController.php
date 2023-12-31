<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{

    //Routes
    public function  adminDashboard() {
        return view('admin.adminDashboard');
    }

    // public function  adminEvents() {
    //     return view('admin.adminEvents');
    // }

    public function  adminRecords() {
        // $records = Record::all();
        return view('admin.adminRecords', [
            'records' => Record::latest()->filter(request(['search']))->paginate(10)
    ]);
    }
    
    public function  adminAddRecords() {
        return view('admin.adminAddRecords' );  // Show add Form
    }
    
    
    public function adminEditRecords(Record $record) {  //Show Edit From
        return view('admin.adminEditRecords' , ['record' => $record]);
    }



    public function adminUpdateRecord(Request $request, Record $record) {  //Update Patient Record
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'month_bdate' => 'required',
            'day_bdate' => 'required',
            'year_bdate' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'height' => 'required',
            'contact_first_name' => 'required',
            'contact_last_name' => 'required',
            'contact_street_address' => 'required',
            'contact_city' => 'required',
            'contact_phone_number' => 'required',
        ]);

        $record->update(($formFields));
        return redirect('/admin/adminRecords');
    }

    public function destroy(Record $record) { //delete Patient Record
        $record->delete();
        return redirect('/admin/adminRecords');
    }
    
    public function  adminRecordView(Record $record) {    //View each Record
      return view('admin.adminRecordView', ['record' => $record]);
    }
            

 
    
    
    
    // public function  adminRecordView() {
    //     $records = Record::all();
    //     return view('admin.adminRecordView', ['records' => $records]);
    // }

    // public function  adminRecordView($id) {    //original View each Record
    //     $records=Record::find($id);
    //     dd($records);
    //     return view('admin.adminRecordView',['records' => $records]);
    // }

    // public function adminEditRecords(Record $record) {  //Edit
    //     return view('admin/adminEditRecords' , ['records' => $record]); //original
    // }


    public function  adminCreateBlog() {
        return view('admin.adminCreateBlog');
    }
    

    // public function  create() {
    //     return view('adminAddRecords');
    // }

    //Store Patient Records
    public function storeRecords(Request $request) {
        // dd(Record::all());
        $formFeilds = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'month_bdate' => 'required',
            'day_bdate' => 'required',
            'year_bdate' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'height' => 'required',
            'contact_first_name' => 'required',
            'contact_last_name' => 'required',
            'contact_street_address' => 'required',
            'contact_city' => 'required',
            'contact_phone_number' => 'required',
        ]);

        Record::create($formFeilds);

        return redirect('/admin/adminRecords');
    }
}
