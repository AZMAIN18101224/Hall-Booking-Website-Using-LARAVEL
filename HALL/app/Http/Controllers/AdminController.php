<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hall;

use Illuminate\support\Facades\Auth;

use App\Models\Booking;

class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {

            if(Auth::user()->usertype==1)
            {
                return view('admin.add_hall'); 

            }
            else
            {
                return redirect()->back();
            }

        }
        else
        {
            return redirect('login');
        }
    
       
    }

    public function upload(Request $request)
    {
        $hall=new hall;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('hallimage',$imagename);
        
        $hall->image=$imagename;

        $hall->name=$request->name;

        $hall->location=$request->location;

        $hall->phone_number=$request->phone_number;

        $hall->save();

        return redirect()->back()->with('message', 'Hall Added Successfully');


    }
    public function showbooking()
    {
        $data=booking::all();
        return view('admin.showbooking',compact('data'));
    }

    public function approved($id)
    {
        $data=booking::find($id);

        $data->status='approved';

        $data->save();
        
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data=booking::find($id);

        $data->status='canceled';

        $data->save();
        
        return redirect()->back();
    }

    public function showhall()
    {

        $data = hall::all();

        
        return view('admin.showhall', compact('data'));
    }

    public function deletehall($id)
    {
        $data=hall::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatehall($id)
    {
        $data = hall::find($id);

        return view('admin.update_hall',compact('data'));

    }

    public function edithall(Request $request , $id)
    {
        $hall = hall::find($id);

        $hall->name=$request->name;

        $hall->location=$request->location;

        $hall->phone_number=$request->phone_number;

        $image=$request->file;

        if($image)
        {

 $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('hallimage',$imagename);

        $hall->image=$imagename;

        }

        $hall->save();

        return redirect()->back()->with('message','Hall Details Updated Successfully!');

        
    }
}
