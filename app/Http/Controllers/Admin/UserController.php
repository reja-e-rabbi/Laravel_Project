<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Hash;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    function ListAction(){
        $data['meta_title'] = 'User List';
        $AllUsers = DB::select('select id, name, email, is_role from users limit 100');
        $data['list'] = $AllUsers;
        //dd($AllUsers);
        return view('Admin.List', $data);
    }
    function CreateUserAction(){
        $data['meta_title'] = 'Create User';
        return view('Admin.CreateUser', $data);
    }
    function RegAction(Request $request) {
        //dd($request->all());
        $rules = [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|string|min:4',
        ];
        $messages = [
            'name.required' => 'the Name field is required',
            'name.min' => 'the Name must be at least 4 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('/createuser')->withErrors($validator)->withInput();
        } else {
            $hashpass = Hash::make($request->password);
            DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashpass
            ]);
            return redirect('/createuser')->withErrors(['errorAll' => 'user Add is Succes'])->withInput();
        }
    }
}
