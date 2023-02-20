<?php

namespace App\Http\Controllers\User\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\User;
use Hash;
use Auth;

class LoginController extends Controller
{
    // use ThrottlesLogins;

    /**
     * Max login attempts allowed.
     */
    public $maxAttempts = 3;

    /**
     * Number of minutes to lock the login.
     */
    public $decayMinutes = 10;

    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    /**
     * Username used in ThrottlesLogins trait
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    public function showLoginForm(Request $request)
    {
        return view('users.auth.login');
    }

    private function validator(Request $request)
    {

        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:users|min:5|max:255',
            'password' => 'required|string|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => __('Wrong credentials entered Email do not match'),
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }
    public function passwordValidate(Request $request)
    {

        $user = User::where('email', $request->{$this->username()})->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Wrong credentials entered Password do not match ']);
        }
    }
    public function login(Request $request) {
        $this->validator($request);
        if($this->passwordValidate($request)){
            return $this->passwordValidate($request);
        }

        if (Auth::guard('user')->validate($request->only('email', 'password'))) {
            $user = Auth::guard('user')->getLastAttempted();
           // $log=Auth::user()->$_SERVER;

            if ($user->is_verified == 1) {
                if($user->status == 1 & $user->first_name == "Guest") {
                    Auth::guard('user')->login($user, $request->has('remember'));

                    return redirect()->route('user.checkout');
                }
                elseif($user->status == 1){
                    Auth::guard('user')->login($user, $request->has('remember'));

               $user=DB::table('users')->where('id', $user->id)->update(['status' => 0]);
            //    $user_blogs= $request->user()->blog;
            //    return view('blog.show_blogs',['user_blogs'=>$user_blogs]);

                    return redirect()->route('user.dashboard')->with('success', __('You have logged in successfully!'));
                }
                else {

                    return redirect()->back()->with('error', __('Your account is Login in Other device'));
                }
            } else {
                return redirect()->back()->with('error', __('Please verify your email before login!'));
            }

        }

        return redirect()->back()->with('error', __('Login failed, please try again!'));
    }

}
