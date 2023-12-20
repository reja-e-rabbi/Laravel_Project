<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function SelectAction($id) {
        $query = DB::select('select id,sl,type,name,email,subject,content,time from message order by time desc limit ?', [30]);
        $data['query'] = $query;
        return view('admin.message', $data);
    }
    public function FetchAction(Request $request, $id) {
        $arr = [
            'status' => false,
            'message'=> 'this data load is fails',
        ];
        switch ($id) {
            case 'data':
                $query = DB::select('select id,sl,type,name,email,subject,content,time from message order by time desc limit ?', [7]);
                if ($query) {
                    $arr['data'] = $query;
                    $arr['status'] = true;
                    $arr['message'] = 'load success';
                }
                break;
            
            default:
                $arr['message'] = 'error: Check url';
                break;
        }
        return response()->json($arr);
    }
}
