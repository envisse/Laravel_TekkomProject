<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
    }

    public function showLoginForm()
    {
        return view('auth.newlogin');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'nama_pegawai' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $login = [
            'nama_pegawai' => $request->input('nama_pegawai'),
            'password' => $request->input('password')
        ];


        if (auth()->attempt($login)) {
            if (auth()->user($login)->hasRole('master')) {
                return redirect()->intended('/administrator/dashboard');
            } else {
                return redirect()->intended('/administrator');
            }
        } else {
            return redirect()->back()->with('error','Username atau password salah !!!');
        }
    }

    public function logout(Request $request)
    {
        auth::logout();
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/login');
    }
}
