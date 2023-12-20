<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function Index() {
        $data['meta_title'] = 'Home';
        $data['testimonil'] = DB::select('select type,name,user_img_link,profession,country,dilog from testimonil order by name desc limit 5');
        $sitelog = DB::select('select id, sl,type,name,link,total_project,total_project_sammary,happy_clint,happy_clint_sammary,comments,upload_link,address,email,contact,socile from sitelog order by id limit 10');
        $skill = DB::select('select id,sl,name,percent from skills order by id desc limit 12');
        $experience = DB::select('select id,sl,type,name,session_start,session_complete,institute from activity where type = "experience" limit 6');
        $education = DB::select('select id,sl,type,name,session_start,session_complete,institute from activity where type = "education" limit 6');
        $servises = DB::select('select id,sl,type,name,comments,price  from activity where type = "servises" limit 12');
        /*$put = DB::update('update users set votes = 100 where name = ?', ['John']);*/
        $data['basic'] = $sitelog[0];
        $data['uploadcv'] = $sitelog[1];
        $data['address'] = $sitelog[2];
        $data['socilelink'] = json_decode($sitelog[3]->socile);
        $data['cvImages'] = $sitelog[4];
        $data['userinfo'] = $sitelog[5];
        $data['skill'] = $skill;
        $data['experience'] = $experience;
        $data['education'] = $education;
        $data['servises'] = $servises;
        return view('index',$data);
    }
    public function User() {
        $data['meta_title'] = 'Home';
        return "hallow world";
    }
    public function Message(Request $request) {
        $rules = [
            'name'   => 'string',
            'email'  => 'required|email',
            'subject'=> 'string|min:4',
            'message'=> 'required|string|min:4'
        ];
        $message = [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'name.required'=>'The Name field is required.',
            'name.unique'=>'The Name field is not unique.',
            'subject.string'=>'this is no text',
            'subject.min'=>'minimum 4 text requir',
            'message.min'=>'minimum 4 text requir',
            'message.required'=>'The message field is required.',
        ];
        //dd($request->all());
        if (!$_POST) {
            return redirect('/');
        }else {
            # code...
            $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            echo "fails this";
            return redirect('/')->withErrors($validator)->withInput();
        }
        else{
            $sl = date("mdYgia");
            $type = "customer";
            $name = $request->name;
            $email = $request->email;
            $sub = $request->subject;
            $content = $request->message;
            $time = date("g:i a F j");
            $date = date("F j Y");
            $arr = [
                'sl'=> $sl,
                'type'=>$type,
                'name'=>$name,
                'email'=>$email,
                'subject'=>$sub,
                'content'=>$content,
                'time'=>$time,
            ];
            //$message = DB::insert('insert into message (sl,type,name,email,subject,content,time,date) values (?,?, ?,?, ?,?, ?)', [$sl,$type,  $name,$email,  $sub,$content,  $time]);
            $message = DB::table('message')->insert($arr);
            if ($message) {
                return redirect('/')->withErrors(['errorAll' => 'We Send this email Direct Admin, I will contact you'])->withInput();
            }
            else {
                return redirect('/')->withErrors(['errorAll' => 'Sorry this email not register'])->withInput();
            }
        }
        }
        
    }
}
