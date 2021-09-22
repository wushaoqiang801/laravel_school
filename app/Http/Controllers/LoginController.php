<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //测试
    public function test(){

        $data['name'] = '学生01';
        $data['number'] = '202101';

        $flag = DB::table('student')->get();

        dd($flag);
    }
}
