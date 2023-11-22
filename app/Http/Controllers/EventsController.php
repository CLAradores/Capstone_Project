<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

   
    public function   adminEventsForm () {  //Show Add Event Form
        return view('event.adminAddEvent');
    }

    public function  adminEvents () {  //Show/Post Event Admin Event Page
        $events = Event::all();
        return view('event.adminEvents' , ['events' => $events]);
    }
    
    public function  adminEditEvents (Event $event) {  //Edit Event Admin Event Page
        return view('event.adminEditEvent' , ['event' => $event]);
    }
    
    // public function destroy(Event $events) { //delete Patient Record
    //     $events->delete();
    //     return redirect('/event/adminEvents' );
    // }
    
    public function  adminUpdateEvents (Request $request , Event $event) {  //Edit Event Admin Event Page
        $formFields = $request->validate([
            'event_title' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_description' => 'required',
        ]);

        $event->update(($formFields));

        return redirect('/event/adminEvents')->with('message', 'Events updated successfully!');
        
        // return view('event.adminEditEvent' , ['event' => $event]);
    }


    // public function postEvent() { //Post Event 
    //     $events = Event::all();
    //     return view('admin.adminEvents' , ['events' => $events]);
    // }
    
    public function passEvent() { //Post Event on landing PAge
        $events = Event::all();
        return view('events' , ['events' => $events]);
    }
    

    public function createEvent(Request $request) { //Store Event On DataBase
        // dd($request->all());
        $formFields = $request ->validate([
            'event_title' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'event_time' => 'required',
            'event_description' => 'required',
        ]);
        if($request->hasFile('event_picture')) {
            $formFields['event_picture'] = $request->file('event_picture')->store('event_pictures', 'public');
        }
        Event::create($formFields);
        return redirect('/event/adminEvents');
    }
  
    
}
