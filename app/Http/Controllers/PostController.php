<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class PostController extends Controller
{
    public function index(Request $request)
    {   
        $validatedData = $request->validate([
            'search' => 'required|numeric|min:1000000000|max:9999999999'
        ]);
        $searchitem = $validatedData['search'];
        $appointments=Appointment::orderBy('date','desc')->where('mob_no', $searchitem)->get();
        return view('viewappointment',compact('appointments'));
    }
    public function search(Request $request)
    {   
        $appointments=Appointment::orderBy('date','desc')->get();
        return view('searchappointment',compact('appointments'));
    }
    public function create()
    {  
        $slotdetails=[];
        return view('bookingpage',compact('slotdetails'));
    }

    public function check(Request $request)
    {  
        $details = $request->validate([
            'date' => 'required|date'
        ]);
        $appointments=Appointment::where('date', $details['date'])->get(['slot']);
        $slot = [
            '07:00 AM', '07:30 AM', '08:00 AM', '08:30 AM', '09:00 AM', '09:30 AM', 
            '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM', 
            '01:30 PM', '02:00 PM', '02:30 PM', '03:00 PM', '03:30 PM', '04:00 PM', 
            '04:30 PM', '05:00 PM', '05:30 PM', '06:00 PM', '06:30 PM', '07:00 PM'
        ];
        $bookedSlots = $appointments->pluck('slot')->toArray();
        $slotdetails = array_diff($slot, $bookedSlots);
        return view('bookingpage',compact('slotdetails','details'));
    }
    public function store(Request $request)
    {

        
        $appointments = $request->validate([
            'name' => 'required|string|max:50',
            'mob_no' => 'required|numeric|min:1000000000|max:9999999999',
            'date' => 'required|date',
            'slot' => 'required|string',
        ]);
        Appointment::create($appointments);

        return redirect()->route('homepage')->with('success', 'Appointment created successfully!');
    }


    public function delete($id)
    {
        $appointments = Appointment::findOrFail($id);
        $appointments->delete();

        return redirect()->route('viewappointment')->with('success', 'Booking deleted successfully.');
    }

    public function edit($id)
    {
        $appointments = Appointment::findOrFail($id);
        return view('editappointment',compact('appointments'));
    }

    public function checkupdate(Request $request)
    {  
        $details = $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string|max:50',
            'mob_no'=> 'required|numeric|min:1000000000|max:9999999999',
            'date' => 'required|date'
        ]);
        $appointments=Appointment::where('date', $details['date'])->get(['slot']);
        $slot = [
            '07:00 AM', '07:30 AM', '08:00 AM', '08:30 AM', '09:00 AM', '09:30 AM', 
            '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM', 
            '01:30 PM', '02:00 PM', '02:30 PM', '03:00 PM', '03:30 PM', '04:00 PM', 
            '04:30 PM', '05:00 PM', '05:30 PM', '06:00 PM', '06:30 PM', '07:00 PM'
        ];
        $bookedSlots = $appointments->pluck('slot')->toArray();
        $slotdetails = array_diff($slot, $bookedSlots);
        return view('editappointment',compact('slotdetails','details'));
    }

    public function update(Request $request, $id)
    {
        $appointments = $request->validate([
            'name' => 'required|string|max:50',
            'mob_no' => 'required|numeric|min:1000000000|max:9999999999',
            'date' => 'required|date',
            'slot' => 'required|string',
        ]);
           
        $updatingpost = Appointment::findorFail($id);
        $updatingpost->update($appointments);

        return redirect()->route('searchappointments')->with('success', 'Update successfully.');
    }


}
