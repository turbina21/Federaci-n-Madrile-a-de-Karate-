<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

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
    }
    public function username()
    {
        return 'name';
    }


    public function login(Request $request)
    {
        $name = $request->name;
        $pass = $request->password;
        $query = DB::select("select password,name from users where name='" . $name . "';");
        $data = $query[0]->password;
        //dd($query[0],$data);

        /*if (Auth::attempt(['VOTANTEnameULA' => $name,'VOTANTECODIGOBARRAS' => $pass])){
            
             //return redirect('/home');
             dd('data');
        }*/
        if (hash::check($pass, $data)) {

            $users = User::findOrFail($name);
            Auth::login($users);
            return view('/dashboard');
        }
        //{{ Auth::user()->VOTANTECODIGOBARRAS }}
        //{{ Crypt::decrypt($query[0]->VOTANTECODIGOBARRAS) }}
        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 'password' => 'required',
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
}
