<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\Auth;

use App\Models\User;

use App\Models\Hall;

use App\Models\booking;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $hall = hall::all();

                return view('user.home', compact('hall'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $hall = hall::all();
           
        return view('user.home', compact('hall'));

        }    
    }
    public function booking(Request $request)
    {
        $data = new booking;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->hall=$request->hall;

        $data->status='In progress';

        if(Auth::id())
        {

        $data->user_id=Auth::user()->id;

        }
        $data->save();

        return redirect()->back()->with('message', 'Thank you for Booking in HallBooking.com');
        
    }

    public function mybookings()
    {
        if(Auth::id())
        {
            
            $userid=Auth::user()->id;

            $book=booking::where('user_id', $userid)->get();

            return view('user.my_bookings', compact('book'));
        }
        else
        {
            return redirect()->back();
        }
        
    }

    public function cancel_book($id)
    {

        $data=booking::find($id);

        $data->delete();

        return redirect()->back();

    }

}
