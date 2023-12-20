<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function BasicAction($id) {
        switch ($id) {
            case 'basic':
                //$query = DB::select("select sl,type,name,link,total_project,total_project_sammary,happy_clint,happy_clint_sammary,comments,upload_link from sitelog where sl = 'sl12231' limit 1");
                $query = DB::table('sitelog')->where('sl', '=', 'sl12231')->first();
                $data['query'] = $query;
                return view('Admin.basic', $data);
                break;
            case 'uploadcv':
                $query = DB::table('sitelog')->where('sl', '=', 'sl12232')->first();
                $data['query'] = $query;
                return view('Admin.uploadcv',$data);
                break;
            case 'address':
                $query = DB::table('sitelog')->where('sl', '=', 'sl12233')->first();
                $data['query'] = $query;
                return view('Admin.address', $data);
                break;
            case 'education':
                $query = DB::select('select sl,type,name,session_start,session_complete,institute,created,comments,price from activity where type="education"');
                $data['query'] = $query;
                //dd($data['query']);
                return view('Admin.education',$data);
                break;
            case 'experience':
                $query = DB::select('select sl,type,name,session_start,session_complete,institute,created,comments,price from activity where type="experience"');
                $data['query'] = $query;
                return view('Admin.experience', $data);
                break;
            case 'socile':
                $query = DB::table('sitelog')->where('sl', '=', 'sl12234')->first();
                $data['query'] = json_decode($query->socile);
                return view('Admin.socile', $data);
                break;
            case 'testimonil':
                $query = DB::table('sitelog')->where('sl', '=', 'sl12231')->first();
                $data['query'] = $query;
                return view('Admin.testimonil');
                break;
            case 'servises':
                //$query = DB::table('sitelog')->where('sl', '=', 'sl12231')->first();
                $query = DB::select('select sl,type,name,session_start,session_complete,institute,created,comments,price from activity where type="servises"');
                $data['query'] = $query;
                return view('Admin.servises', $data);
                break;
            case 'cvimages':
                $query = DB::table('sitelog')->where('sl', '=', 'sl12235')->first();
                $data['query'] = $query;
                return view('Admin.images', $data);
                break;
            case 'userinfo':
                return 'hallow test';
                $query = DB::table('sitelog')->where('sl', '=', 'sl12236')->first();
                $data['query'] = $query;
                break;
            case 'profileimg':
                $query = DB::table('sitelog')->where('sl', '=', 'sl12235')->first();
                $data['query'] = $query;
                return view('Admin.images', $data);
                break;
            default:
                return view('Backend.error404');
                break;
        }
    }
    public function InsertAction(Request $request, $id) {
        if ($_POST) {
            switch ($id) {
                case 'education':
                    $rules = [
                        'subject' => 'required|max:250',
                        'session_start' => 'required',
                        'session_complete' => 'required',
                        'institute' => 'required|max:250',
                    ];
                    $messages = [
                        'subject.required' => 'This fild is required',
                        'subject.max'=> 'minimum word 4 maximum 250',
                        'sesstion_start.required' => 'This fild is required',
                        'session_complete.required' => 'This fild is required',
                        'institute.required' => 'This fild is required',
                        'institute.max'=> 'minimum word 4 maximum 250',
                    ];
                    if ($_POST) {
                        $validator = Validator::make($request->all(), $rules, $messages);
                        if ($validator->fails()) {
                            return redirect('/settings/education')->withErrors($validator)->withInput();
                        }
                        else {
                            //dd($request->all());
                            $sl = date('Ymdi');
                            $type = 'education';
                            //$update = DB::table('sitelog')->where('sl','sl12234')->update(['socile'=>$arrJson]);
                            $update = DB::insert('insert into activity (sl,type,name, session_start,session_complete,institute,created) values (?,?,?, ?,?,?, ?)', [$sl,$type,$request->subject, $request->session_start,$request->session_complete,$request->institute, 'self']);
                            if ($update) {
                                return redirect('/settings/education')->withErrors(['errorAll'=>'succes Check Now']);
                            } 
                            else {
                                return redirect('/settings/education')->withErrors(['errorAll'=>'error occurs, something wrong'])->withInput();
                            }
                        }
                    }
                    else {
                        return redirect('/error404');
                    }
                break;
                case 'experience':
                    $rules = [
                        'subject' => 'required|max:250',
                        'session_start' => 'required',
                        'session_complete' => 'required',
                        'institute' => 'required|max:250',
                    ];
                    $messages = [
                        'subject.required' => 'This fild is required',
                        'subject.max'=> 'minimum word 4 maximum 250',
                        'sesstion_start.required' => 'This fild is required',
                        'session_complete.required' => 'This fild is required',
                        'institute.required' => 'This fild is required',
                        'institute.max'=> 'minimum word 4 maximum 250',
                    ];
                    if ($_POST) {
                        $validator = Validator::make($request->all(), $rules, $messages);
                        if ($validator->fails()) {
                            return redirect('/settings/education')->withErrors($validator)->withInput();
                        }
                        else {
                            //dd($request->all());
                            $sl = date('Ymdi');
                            $type = 'experience';
                            //$update = DB::table('sitelog')->where('sl','sl12234')->update(['socile'=>$arrJson]);
                            $update = DB::insert('insert into activity (sl,type,name, session_start,session_complete,institute,created) values (?,?,?, ?,?,?, ?)', [$sl,$type,$request->subject, $request->session_start,$request->session_complete,$request->institute, 'self']);
                            if ($update) {
                                return redirect('/settings/experience')->withErrors(['errorAll'=>'succes Check Now']);
                            }
                            else {
                                return redirect('/settings/experience')->withErrors(['errorAll'=>'error occurs, something wrong'])->withInput();
                            }
                        }
                    }
                    else {
                        return redirect('/error404');
                    }
                break;
                case 'servises':
                    $rules = [
                        'name' => 'required|min:4|max:64',
                        'price' => 'required',
                        'institute' => 'required|min:4|max:250',
                    ];
                    $messages = [
                        'name.required' => 'This fild is required',
                        'name.min'=> 'Minimum 3 alphabit',
                        'max.max'=> 'Maximu 64 alphabit',
                        'price.required' => 'This fild is required',
                        /*'price.number' => 'This fild is not number, use number 1,2 3 etc',*/
                        'institute.required' => 'This fild is required',
                        'institute.min'=> 'Minimum 3 alphabit',
                        'institute.max'=> 'Maximu 250 alphabit',
                    ];
                    if ($_POST) {
                        //dd($request->all());
                        $validator = Validator::make($request->all(), $rules, $messages);
                            if ($validator->fails()) {
                                return redirect('/settings/servises')->withErrors($validator)->withInput();
                            }
                            else {
                                //dd($request->all());
                                $sl = date('Ymdi');
                                $type = 'servises';
                                $update = DB::insert('insert into activity (sl,type,name, created,comments,price) values (?,?,?, ?,?,?)', [$sl,$type,$request->name, 'self', $request->institute, $request->price]);
                                if ($update) {
                                    return redirect('/settings/servises')->withErrors(['errorAll'=>'succes Check Now']);
                                } 
                                else {
                                    return redirect('/settings/servises')->withErrors(['errorAll'=>'error occurs, something wrong'])->withInput();
                                }
                            }
                    }
                    else{
                        return redirect('/error404');
                    }
                break;
                default:
                    return redirect('/error404');
                    break;
            }
        }
    }
    public function UpdateAction(Request $request, $id) {
        switch ($id) {
            case 'sitename':
                $rules = [
                    'site_name' => 'required|min:4|max:12',
                ];
                $messages = [
                    'site_name.required' => 'This fild is required',
                    'site_name.min'=> 'minimum word 4 maximum 12',
                    'site_name.max'=> 'minimum word 4 maximum 12',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        echo "validator faild";
                        return redirect('/settings/basic')->withErrors($validator)->withInput();
                    }
                    else {
                        echo "that is valid";
                        $update = DB::table('sitelog')->where('sl','sl12231')->update(['name'=>$request->site_name]);
                        //dd($request->all());
                        if ($update) {
                            return redirect('/settings/basic')->withErrors(['errorAll'=>'succes Check Now']);
                        } else {
                            return redirect('/settings/basic')->withErrors(['errorAll'=>'error occurs, something wrong'])->withInput();
                        }
                    }
                }
                break;
            case 'videocv':
                $rules = [
                    'videoCV' => 'required|min:4|max:250',
                ];
                $messages = [
                    'videoCV.required' => 'This fild is required',
                    'videoCV.min'=> 'minimum word 4 maximum 250',
                    'videoCV.max'=> 'minimum word 4 maximum 250',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/basic')->withErrors($validator)->withInput();
                    }
                    else {
                        $update = DB::table('sitelog')->where('sl','sl12231')->update(['link'=>$request->videoCV]);
                        //dd($request->all());
                    if ($update) {
                        return redirect('/settings/basic')->withErrors(['errorAll2'=>'succes Check Now']);
                    } 
                    else {
                        return redirect('/settings/basic')->withErrors(['errorAll2'=>'error occurs, something wrong'])->withInput();
                    }                        }
                }
                break;
            case 'project':
                $rules = [
                    'complete_project' => 'required|min:1',
                    'complete_project_jurney' => 'required|min:4|max:250',
                ];
                $messages = [
                    'complete_project.required'=>'This Fild Is Required',
                    'complete_project.number'=>'This Fild Is Number',
                    'complete_project.min'=>'This Fild min 1 numeric number',
                    'complete_project_jurney.required' => 'This fild is required',
                    'complete_project_jurney.min'=> 'minimum word 4 maximum 250',
                    'complete_project_jurney.max'=> 'minimum word 4 maximum 250',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/basic')->withErrors($validator)->withInput();
                    }
                    else {
                        $update = DB::table('sitelog')->where('sl','sl12231')->update(['total_project'=>$request->complete_project,'total_project_sammary'=>$request->complete_project_jurney]);
                        //dd($request->all());
                        if ($update) {
                            return redirect('/settings/basic')->withErrors(['errorAll3'=>'succes Check Now']);
                        } 
                        else {
                            return redirect('/settings/basic')->withErrors(['errorAll3'=>'error occurs, something wrong'])->withInput();
                        }
                    }
                }
                break;
            case 'clint':
                $rules = [
                    'happy_clint' => 'required|min:1',
                    'happy_clint_jurney' => 'required|min:4|max:250',
                ];
                $messages = [
                    'happy_clint.required'=>'This Fild Is Required',
                    'happy_clint.number'=>'This Fild Is Number',
                    'happy_clint.min'=>'This Fild min 1 numeric number',
                    'happy_clint_jurney.required' => 'This fild is required',
                    'happy_clint_jurney.min'=> 'minimum word 4 maximum 250',
                    'happy_clint_jurney.max'=> 'minimum word 4 maximum 250',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/basic')->withErrors($validator)->withInput();
                    }
                    else {
                        $update = DB::table('sitelog')->where('sl','sl12231')->update(['happy_clint'=>$request->happy_clint,'happy_clint_sammary'=>$request->happy_clint_jurney]);
                        //dd($request->all());
                        if ($update) {
                            return redirect('/settings/basic')->withErrors(['errorAll4'=>'succes Check Now']);
                        } 
                        else {
                            return redirect('/settings/basic')->withErrors(['errorAll4'=>'error occurs, something wrong'])->withInput();
                        }
                    }
                }
                break;
            case 'comments':
                $rules = [
                    'about' => 'required|min:4|max:250',
                ];
                $messages = [
                    'about.required' => 'This fild is required',
                    'about.min'=> 'minimum word 4 maximum 250',
                    'about.max'=> 'minimum word 4 maximum 250',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        echo "validator faild";
                        return redirect('/settings/basic')->withErrors($validator)->withInput();
                    }
                    else {
                        $update = DB::table('sitelog')->where('sl','sl12231')->update(['comments'=>$request->about]);
                        //dd($request->all());
                        if ($update) {
                            return redirect('/settings/basic')->withErrors(['errorAll6'=>'succes Check Now']);
                        } else {
                            return redirect('/settings/basic')->withErrors(['errorAll6'=>'error occurs, something wrong'])->withInput();
                        }
                    }
                }
                break;
            case 'socile':
                $rules = [
                    'fb' => 'required|max:250',
                    'twitter' => 'required|max:250',
                    'youtube' => 'required|max:250',
                    'linkedin' => 'required|max:250',
                ];
                $messages = [
                    'fb.required' => 'This fild is required',
                    'fb.max'=> 'minimum word 4 maximum 250',
                    'twitter.required' => 'This fild is required',
                    'twitter.max'=> 'minimum word 4 maximum 250',
                    'youtube.required' => 'This fild is required',
                    'youtube.max'=> 'minimum word 4 maximum 250',
                    'linkedin.required' => 'This fild is required',
                    'linkedin.max'=> 'minimum word 4 maximum 250',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/socile')->withErrors($validator)->withInput();
                    }
                    else {
                        //dd($request->all());
                        $arr = [
                            'facebook' => $request->fb,
                            'twitter' => $request->twitter,
                            'youtube' => $request->youtube,
                            'linkedin' => $request->linkedin,
                        ];
                        $arrJson = json_encode($arr);
                        $update = DB::table('sitelog')->where('sl','sl12234')->update(['socile'=>$arrJson]);
                        //dd($request->all());
                        if ($update) {
                            return redirect('/settings/socile')->withErrors(['errorAll'=>'succes Check Now']);
                        } 
                        else {
                            return redirect('/settings/socile')->withErrors(['errorAll'=>'error occurs, something wrong'])->withInput();
                        }
                    }
                }
                else {
                    return redirect('/error404');
                }
                break;
            
            case 'address':
                $rules = [
                    'address' => 'required|min:4|max:250',
                    'email' => 'required|email',
                    'tel' => 'required',
                ];
                $messages = [
                    'address.required' => 'This fild is required',
                    'address.min'=> 'minimum word 4 maximum 250',
                    'address.max'=> 'minimum word 4 maximum 250',
                    'email.required' => 'The email field is required.',
                    'email.email' => 'Please enter a valid email address.',
                    'email.unique' => 'This email address is already taken.',
                    'tel.required' => 'This fild is required',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/address')->withErrors($validator)->withInput();
                    }
                    else {
                        $update = DB::table('sitelog')->where('sl','sl12233')->update(['address'=>$request->address,'email'=>$request->email,'contact'=>$request->tel]);
                        //dd($request->all());
                        if ($update) {
                            return redirect('/settings/address')->withErrors(['errorAll'=>'succes Check Now']);
                        } else {
                            return redirect('/settings/address')->withErrors(['errorAll'=>'error occurs, something wrong'])->withInput();
                        }
                    }
                }
                break;
            case 'cvimages':
                $rules = [
                    'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ];
                $messages = [
                    'file.required' => 'This fild is required',
                    'file.image'=> 'This file is not Images',
                    'file.mimes'=> 'This file is not images, only sopor this jpg, png, jaeg ',
                    'file.max'=> 'Maximu file size is 2MB',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/cvimages')->withErrors($validator)->withInput();
                    }
                    else {
                        //dd($request->all());
                        //$name = $request->file->getClientOriginalName();
                        $file = $request->file('file');
                        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                        $imagePath = $request->file('file')->storeAs('img', $fileName,'public');
                        if ($imagePath) {
                            $update = DB::table('sitelog')->where('sl','sl12235')->update(['link'=>'storage/img/'.$fileName, 'upload_link'=>'storage/img/']);
                            if ($update) {
                                $img = DB::insert('insert into images (sl,name,img_link,statuses) values (?, ?, ?, ?)', [time() . '_' . uniqid(), $fileName, 'storage/img/', 'users']);
                                if ($img) {
                                    # code...
                                    return redirect()->back()->withErrors(['errorAll'=>'success, This image upload is success']);
                                }
                                else {
                                    return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success, Check databases']);
                                }
                            }
                            else {
                                return redirect()->back()->withErrors(['errorAll'=>'Fail, This image upload is not success. check databases']);
                            }
                        }
                        else {
                            return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success']);
                        }
                    }
                }
                else{
                    return redirect('/error404');
                }
                break;
            case 'uploadcv':
                $rules = [
                    'file' => 'required|max:10240',
                ];
                $messages = [
                    'file.required' => 'This fild is required',
                    'file.max'=> 'Maximu file size is 5MB',
                ];
                if ($_POST) {
                    //dd($request->all());
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/uploadcv')->withErrors($validator)->withInput();
                    }
                    else {
                        //dd($request->all());
                        //$name = $request->file->getClientOriginalName();
                        $file = $request->file('file');
                        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                        $imagePath = $request->file('file')->storeAs('pdf', $fileName,'public');
                        if ($imagePath) {
                            $update = DB::table('sitelog')->where('sl','sl12232')->update(['name'=> $fileName, 'link'=>'storage/pdf/'.$fileName, 'upload_link'=>'storage/pdf/']);
                            if ($update) {
                                return redirect()->back()->withErrors(['errorAll'=>'success, This image upload is success']);
                            }
                            else {
                                return redirect()->back()->withErrors(['errorAll'=>'Fail, This image upload is not success. check databases']);
                            }
                        }
                        else {
                            return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success']);
                        }
                    }
                }
                else{
                    return redirect('/error404');
                }
                break;
            case 'cvimages':
                $rules = [
                    'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ];
                $messages = [
                    'file.required' => 'This fild is required',
                    'file.image'=> 'This file is not Images',
                    'file.mimes'=> 'This file is not images, only sopor this jpg, png, jaeg ',
                    'file.max'=> 'Maximu file size is 2MB',
                ];
                if ($_POST) {
                    $validator = Validator::make($request->all(), $rules, $messages);
                    if ($validator->fails()) {
                        return redirect('/settings/cvimages')->withErrors($validator)->withInput();
                    }
                    else {
                        //dd($request->all());
                        //$name = $request->file->getClientOriginalName();
                        $file = $request->file('file');
                        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                        $imagePath = $request->file('file')->storeAs('img', $fileName,'public');
                        if ($imagePath) {
                            $update = DB::table('sitelog')->where('sl','sl12235')->update(['link'=>'storage/img/'.$fileName, 'upload_link'=>'storage/img/']);
                            if ($update) {
                                $img = DB::insert('insert into images (sl,name,img_link,statuses) values (?, ?, ?, ?)', [time() . '_' . uniqid(), $fileName, 'storage/img/', 'users']);
                                if ($img) {
                                    # code...
                                    return redirect()->back()->withErrors(['errorAll'=>'success, This image upload is success']);
                                }
                                else {
                                    return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success, Check databases']);
                                }
                            }
                            else {
                                return redirect()->back()->withErrors(['errorAll'=>'Fail, This image upload is not success. check databases']);
                            }
                        }
                        else {
                            return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success']);
                        }
                    }
                }
                else{
                    return redirect('/error404');
                }
                break;
            case 'profileimg':
                    $rules = [
                        'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ];
                    $messages = [
                        'file.required' => 'This fild is required',
                        'file.image'=> 'This file is not Images',
                        'file.mimes'=> 'This file is not images, only sopor this jpg, png, jaeg ',
                        'file.max'=> 'Maximu file size is 2MB',
                    ];
                    if ($_POST) {
                        /* $validator = Validator::make($request->all(), $rules, $messages);
                        if ($validator->fails()) {
                            return redirect('/settings/cvimages')->withErrors($validator)->withInput();
                        }
                        else {
                            //dd($request->all());
                            //$name = $request->file->getClientOriginalName();
                            $file = $request->file('file');
                            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                            $imagePath = $request->file('file')->storeAs('img', $fileName,'public');
                            if ($imagePath) {
                                $update = DB::table('sitelog')->where('sl','sl12235')->update(['link'=>'storage/img/'.$fileName, 'upload_link'=>'storage/img/']);
                                if ($update) {
                                    $img = DB::insert('insert into images (sl,name,img_link,statuses) values (?, ?, ?, ?)', [time() . '_' . uniqid(), $fileName, 'storage/img/', 'users']);
                                    if ($img) {
                                        # code...
                                        return redirect()->back()->withErrors(['errorAll'=>'success, This image upload is success']);
                                    }
                                    else {
                                        return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success, Check databases']);
                                    }
                                }
                                else {
                                    return redirect()->back()->withErrors(['errorAll'=>'Fail, This image upload is not success. check databases']);
                                }
                            }
                            else {
                                return redirect()->back()->withErrors(['errorAll'=>'Fails, This image upload is not success']);
                            }
                        } */
                    }
                    else{
                        return redirect('/error404');
                    }
                    break;
            default:
                return redirect('/error404');
                break;
        }
    }
    public function DeleteAction(Request $request, $id,$sl) {
        $arr = [
            'status' => false,
            'message'=>"servises faill",
            'data' => $sl
        ];
        switch ($id) {
            case 'edu':
                if ($sl) {
                    $arr['status'] = true;
                    $query = DB::table('activity')->where(['sl'=>$sl])->delete();
                    if ($query) {
                        $arr['status'] = true;
                        $arr['message']= "servises Success";
                    }
                }
                break;
            case 'user':
                if ($sl) {
                    $arr['status'] = true;
                    $ssl = (int) $sl;
                    $query = DB::table('users')->where(['id'=>$ssl])->delete();
                    if ($query) {
                            $arr['status'] = true;
                            $arr['message']= "servises Success";
                    }
                }
                break;
            default:
                $arr["message"] = "No servises selected";
                break;
        }
        return response()->json($arr);
    }
}
