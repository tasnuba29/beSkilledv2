<?php

namespace App\Http\Controllers;

use App\Models\BatchPerticipate;
use App\Models\enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{

    public function index(){
  
        $user =  Auth::user();
        return view('user.index',compact('user'));
        
        
    }




    public function services(){
        $page_name = 'My Services';
        // $courses = BatchPerticipate::where('user_id',Auth::user()->id)->get();
        $courses = enroll::where('user_id',Auth::user()->id)->get();

        $type="service";
        // return compact('page_name','courses','type');
        return view('user.courses.index',compact('page_name','courses','type'));
        
        
    }

    public function trainings(){
        $page_name = 'My  Trainings';
        $courses = enroll::where('user_id',Auth::user()->id)->get();
        $type="training";
        return view('user.courses.index',compact('page_name','courses','type'));
    }
    //

    public function accountUpdate(Request $request){
        // return $request;

        $user =  Auth::user();
        $user->name =  $request->name;
        $user->email =  $request->email;
      

        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/', $fileName);
            $user->profile_photo_path = $fileName;
        } 
        $user->save();



        $user->perticipator->name =  $request->name;
        $user->perticipator->email =  $request->email;
        $user->perticipator->number =  $request->number;
        $user->perticipator->city =  $request->city;
        $user->perticipator->country =  $request->country;
        $user->perticipator->occopation =  $request->occopation;
        $user->perticipator->save();
        

        
        return back();
    }
  
    

    
}
