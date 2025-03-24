<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->intended('/about');
        }
        else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ])->onlyInput('email');
        }
    }

    function register(){
        return view('register');
    }

    function create(Request $request){
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password1' => ['required'],
            'password2' => ['required']
        ]);

        if($credentials['password1'] != $credentials['password2']){
            echo"
                <script>
                    alert('Password does not match');
                    window.location='/register';
                </script>
            ";
        }
        else{
            if(count(User::all()) < 1){
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password1)
                ]);
                
                Auth::login($user);

                event(new Registered($user));
    
                return redirect('/profile');
            }
            else{
                echo"
                    <script>
                        alert('You are not allowed to register');
                        window.location='/register';
                    </script>
                ";
            }
        }
    }

    function verifyEmail(){
        return view('auth.verify-email');
    }

    function verifyingEmail(EmailVerificationRequest $request){
        $request->fulfill();

        return redirect('/logout');
    }

    function sendVerificationEmail(Request $request){
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }

    function forgotPassword(){
        return view('auth.forgot-password');
    }

    function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    function sendResetPassword(string $token){
        return view('auth.reset-password', ['token' => $token]);
    }

    function resetingPassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'), function (User $user, string $password){
                $user->forceFill([
                    'password' =>Hash::make($password)
                ])->setRememberToken(Str::random(60));
                
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('/login')
                    : back()->withErrors(['email' => [__($status)]]);
    }

    function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
