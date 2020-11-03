<?php
/**
 * Author       : Hamzah
 * Email        : if.hamzah93@gmail.com
 * Since        : Version 1.2 Modified
 * Dilarang merubah apapun tanpa sepengetahuan pembuat
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
        $messages = [
            "username.required" => "Username is required",
            "username.exists" => "Username doesn't exists",
            "password.exists" => "Password doesn't exists",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least 6 characters"
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:users,username',
            'password' => 'required|min:6'
        ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
   
            if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
            {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')->with('status', 'Username atau Password salah');
            }
        }
          
    }

    public function logout(Request $request)
    {   
        auth()->logout();
        session()->flush();
        return redirect('admin');
    }
}
