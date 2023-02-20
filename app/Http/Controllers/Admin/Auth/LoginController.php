<?php

namespace App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Auth;
use Hash;
use App\Models\Admin;
use App\models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating admin users for the application and
    | redirecting them to your admin dashboard.
    |
    */

    /**
     * This trait has all the login throttling functionality.
     */
    // use ThrottlesLogins;s

    /**
     * Max login attempts allowed.
     */
    public $maxAttempts = 3;

    /**
     * Number of minutes to lock the login.
     */
    public $decayMinutes = 10;

    /**
     * Only guests for "admin" guard are allowed except
     * for logout.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('admin');
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

    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');

    }


    /**
     * Validate the form data.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    private function validator(Request $request)
    {
        $rules = [
            'email'    => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => __('These credentials do not match our records.'),
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }
    public function passwordValidate(Request $request)
    {
        $user = Admin::where('email', $request->{$this->username()})->first();

        if ($user && !Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'These credentials do not match our records.']);
        }
    }
    public function login(Request $request)
    {
        $this->validator($request);
        $this->passwordValidate($request);
 

        if (Auth::guard('admin')->validate($request->only('email', 'password'))) {
            $admin = Auth::guard('admin')->getLastAttempted();
            if ($admin->status) {

                Auth::guard('admin')->login($admin, $request->has('remember'));

                return redirect()->route('admin.dashboard')->with('flash_success', __('You have logged in successfully!'));
            }
            else {
                return redirect()->back()->with('error', __('Your account is deactivated.'));
            }

        }


        return redirect()->back()->with('error', __('Login failed, please try again!'));
    }

    /**
     * Logout the admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('flash_success', __('You have successfully logged out!'));
    }
}
