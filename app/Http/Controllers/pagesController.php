<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\entries;

use App\Mail\testEmail;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = Auth::user();
        $has_user_submitted = entries::where('user_id', Auth::id())->count();

        return view('index', compact('current_user','has_user_submitted'));
    }

    public function success()
    {
        return view('success');
    }

   
    public function sendmail(){
        $data = ['message' => 'This is a test'];
        \Mail::to('iconstechsystems@gmail.com')->send(new testEmail($data));

        return view('mail_success');
    }
   

    
    public function register(Request $request)
    {   
        // register the users if they have not been registered before
        // register the users with their profile pictures
        $this->validate($request, [
            'profile_image' => 'image|nullable|max:1999'
        ]);
        
        //check if the email exists
        $has_user_register = user::where('email','=',$request->email)->count();

        if ($has_user_register == 0) {
            # code...
            $newpassword = Hash::make($request->phone);
            $add_user = new user;
            $add_user->name = $request->name;
            $add_user->email = $request->email;
            $add_user->gender = $request->gender;
            $add_user->phone = $request->phone;
            $add_user->dob = $request->dob;
            $add_user->level = $request->level;
            $add_user->university = $request->university;
            $add_user->department = $request->department;
            $add_user->matric_no = $request->matric_no;
            $add_user->password = $newpassword;
            //$add_user->profile_image = $request->profile_image;

            $add_user->save();

            return redirect()->route('verify');
        }else{
            ?>
                <script>
                    window.alert('It would seem that you have previously registered, Kindly proceed to submit your entry');
                </script>
            <?php
            return redirect()->route('verify');
        }        
    }

    public function verify(){
        return view('verify_user');
    }
    public function submit_essay(Request $request)
    {
        $this->validate( $request, [
            'image' => 'image|nullable|max:1999' 
         ]);
 
         //handle file upload
         if( $request->hasFile('image')){
             // get filename with extensio
             $filenamewithext = $request->file('image')->getClientOriginalName();
             //get just file name
             $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
             //get just ext
             $extension = $request->file('image')->getClientOriginalExtension();
             //filename to store
             $file_name_to_store = $filename.'_'.time().'.'.$extension;
             //upload image
             $path = $request->file('image')->storeAs('public/profile_images', $file_name_to_store);
         } else {
             $file_name_to_store = 'noimage.jpg';
         }

        $add_entries = new entries;
        $add_entries->user_id = Auth::id();
        $add_entries->user_profile = $request->about_textarea;
        $add_entries->essay_summary = $request->summary_textarea;
        $add_entries->essay = $request->essay_textarea;
        $add_entries->profile_picture = $file_name_to_store;
       
        
        $add_entries->save();
        return view('index')->withSuccess('Your entry has been successfully submitted. Do not attempt to submit twice. You will recieve an email notification');
    }
}
