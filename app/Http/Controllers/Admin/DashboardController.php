<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Mail\AddUsertSignupMail;
use Session;
use App\Mail\AddUserSignupAdminMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Str;
use App\Models\UserVerify;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        set_time_limit(0);
        // parent::__construct();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user_datas= User::all();
      
        return view('admin.dashboard',['user_datas'=>$user_datas]);
    }
    public function addUserForm(Request $request){
        return view('admin.auth.user_register');
    }

    public function addUser(Request $request){
            $request->validate([
                'firstname' => ['required',],
                'lastname' => ['required',],
                'email' => ['required','unique:users'],
                'password' => ['required'],
            ]);
    
            DB::beginTransaction();
    
            try {
            $data = User::create([
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'dob'=>$request->dob,
                'status'=> 1,
                'is_verified'=> 1,
            ]);
    
    
            $token = Str::random(64);
    
            UserVerify::create([
                'user_id' => $data->id,
                'token' => $token
            ]);
    
           
    
            Mail::send('email.acc_registered_by_admin', ['email' =>$request->email, 'password'=>$request->password], function($message) use($request){
                $message->to($request->email);
                $message->subject('Account Registration Mail');
            });
            
    
            DB::commit();
            return redirect()->route('admin.dashboard')->with('success', __('You have registered successfully!'));
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('admin.add_user')->with('success', 'Something went wrong!!');
        }
       
        
    }

    public function editUserForm(Request $request){
        // dd($request->user_id);
        $user_details=User::find($request->user_id);
        // dd($user_details);
        return view('admin.auth.edit_user',['user_details'=>$user_details]);
    }

    public function editUser(Request $request){
        // dd($request);
        $user= User::find($request->id);

        $user->first_name= $request->firstname;
        $user->last_name= $request->lastname;
        $user->email= $request->email;
        $user->dob= $request->dob;
        $user->status= $request->status;
       if($user->save()){
        return redirect()->route('admin.dashboard')->with('success', __('You have registered successfully!'));

       }
        else{
            return redirect()->route('admin.dashboard')->with('success', __('Something went wrong!!'));

        }


    }
    public function deleteUser($id){
        // dd($id);
        $user= User::find($id);
        $user->delete();
        return redirect()->route('admin.dashboard')->with('success', __('You have deleted user successfully!'));

    }


}
