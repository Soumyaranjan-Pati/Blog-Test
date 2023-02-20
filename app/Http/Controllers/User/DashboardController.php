<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data['panel'] = "User";

    }
    /**
     * Show the application admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request) {//sp
        $user_blogs= $request->user()->blog;
        return view('frontend.index',['user_blogs'=>$user_blogs]);
    }

    public function checkin()
    {
        Auth::guard('user')->logout();

        return redirect()->route('user.login');
    }

    public function logout()
    {
        $user= Auth::user();
        $user=DB::table('users')->where('id', $user->id)->update(['status' => 1]);
        Auth::guard('user')->logout();

        return redirect()->route('user.login')->with('success', __('You have successfully logged out!'));
    }

}
