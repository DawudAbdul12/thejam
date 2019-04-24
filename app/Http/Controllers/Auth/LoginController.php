<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:member')->except('logout');
        $this->middleware('guest:vendor')->except('logout');

    }


    public function showAdminLoginForm()
    {
        // return view('auth.login', ['url' => 'admin']);
        return view('login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/index');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    // |###############################|
    //          Vendor's Login
    // |###############################|

    public function showVendorLoginForm()
    {
        return view('vendor.login', ['url' => 'vendor']);
    }

    public function vendorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('vendor')->attempt(['p_email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/vendor');
        }
        return back()->withInput($request->only('p_email', 'remember'));
    }
    
}
