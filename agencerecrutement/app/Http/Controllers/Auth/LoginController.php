<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Candidature;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    protected function redirectTo(){
        $candidature = Candidature::where('candidat_id', '=', Auth::user()->id)->exists();
        if( Auth::user()->role_id == 1){
            return '/AdminAcceuil';
        }
        if( Auth::user()->role_id == 2){
            return '/Recruteur';
        }
        if( Auth::user()->role_id == 3 && $candidature ){
            $user = Auth::user()->id;
            return '/candidature/' . $user ;
        } 
        if( Auth::user()->role_id == 3 && !$candidature )
            return '/candidature/create';
        if (auth()->user()->role_id == 4){
                return '/entreprise';
        }
    }
}