<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:member')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:temporary-member')->except('logout');
    }
    public function vuelogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
          $user = Auth::user();
          $username = $user->name;
          return response()->json([
            'status'   => 'success',
            'user' => $username,
          ]); 
        } else { 
          return response()->json([
            'status' => 'error',
            'user'   => 'Unauthorized Access'
          ]); 
        } 
    }

    /**
     * Show the login form for different Members.
     *
     * @param  string  $guard
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response
     */
    public function showLoginForm($guard)
    {
        // Validate the guard to prevent invalid URLs
        if (!in_array($guard, ['admin', 'member', 'temporary-member'])) {
            abort(404); // Return a 404 error if the guard is invalid
        }

        // Return the login view with the specified guard
        return view('auth.login', ['url' => $guard]);
    }

    /**
     * Handle the login request for different guards.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $guard
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request, $guard)
    {
        // Validate the guard to ensure the correct guard is being used
        if (!in_array($guard, ['admin', 'member', 'temporary-member'])) {
            abort(404); // Return a 404 error if the guard is invalid
        }
        $this->validate($request, ['email' => 'required|email', 'password' => 'required|min:6']);

        // Attempt to log in using the specified guard
        if (Auth::guard($guard)->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Redirect to the appropriate dashboard based on the guard
            return redirect()->intended("/$guard");
        }
        return back()->with('flash_message_error', 'Invalid Username or Password')->withInput($request->only('email', 'remember'));
    }
    /*
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (\Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        else{
            return back()->with('flash_message_error','Invalid Username or Password')->withInput($request->only('email', 'remember'));
        }
    }

    public function showMemberLoginForm()
    {
        return view('auth.login', ['url' => 'member']);
    }

    public function memberLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/member');
        } else{
            return back()->with('flash_message_error','Invalid Username or Password')->withInput($request->only('email', 'remember'));
        }
    }*/

    /**
     * Show the login form for temporary members.
     *
     * This function returns the view for the login page, specifying that the 
     * login is for a temporary member by passing the 'url' parameter.
     *
     * @return \Illuminate\View\View
     */
    /* public function showTempMemberLoginForm()
    {
        return view('auth.login', ['url' => 'temporary-member']);
    }*/

    /**
     * Handle the login request for a temporary member.
     *
     * This function validates the login credentials provided by the temporary member.
     * It then attempts to authenticate the user using the 'temporary-member' guard.
     * If successful, the user is redirected to the intended page. 
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    /* public function tempMemberLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log in using the temporary-member guard
        if (\Auth::guard('temporary-member')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/temporary-member');
        } else {
            return back()->with('flash_message_error', 'Invalid Username or Password')->withInput($request->only('email', 'remember'));
        }
    }*/
}
