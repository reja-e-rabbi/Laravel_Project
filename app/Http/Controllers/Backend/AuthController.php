<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Hash;
use Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function Login(Request $request) {
        /* $pass = 1122334455;
        $dd = Hash::make($pass);
        dd($dd); */
        if (Auth::check()) {
            return redirect('/dashbord');
        }
        else{
            return view('login');
        }
    }
    public function Forgot(Request $request) {
        return view('forgot');
    }
    public function Login_check(Request $request) {
        //dd($request->all());
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string|min:4',
        ];

        // Custom error messages
        $messages = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);
        $user = DB::table('users')->where('email', $request->email)->first();
 
        //echo $user->email;
        // Check if the validation fails
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            $credentials = $request->only('email', 'password');
            if (!empty($user)) {
                echo "that is not empty";
                $hashPass = Hash::check($request->password, $user->password);
                if ($hashPass) {
                    echo "password Hashes";
                    if (Auth::attempt($credentials)) {
                        return redirect()->intended('/dashbord');
                    } else{
                        return redirect('login')->withErrors(['errorAll' => 'Invalid credentials'])->withInput();
                    } 
                }
                else {
                    return redirect('login')->withErrors(['password' => 'Password Not Match Please Try again'])->withInput();
                }
            } 
            else {
                echo "changrs 0";
                return redirect('login')->withErrors(['errorAll' => 'You are not registerd'])->withInput();
            }
        }
    }
    public function Logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function Next(Request $request) {
        dd($request->all());
    }
}
