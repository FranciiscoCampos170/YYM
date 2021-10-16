<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        $error = false;
        return view('plans.login', compact('error'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

         $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
            /*return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');*/
        }
  
        return redirect()->route('login')->with('error','O seu e-mail ou palavra-passe estão errados');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()

    {

        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();
    
            if($finduser){  
                return $user;   

                Auth::login($finduser);

                return "Encontrou utilizador";

    
            }else{
                    return redirect()->back();
               /* $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

                    'google_id'=> $user->id,

                    'password' => encrypt('123456dummy')

                ]);

    

                Auth::login($newUser);

     

                return redirect('/');*/

            }

    

        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }
}
