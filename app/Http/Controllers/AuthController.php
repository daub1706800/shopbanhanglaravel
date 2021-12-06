<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Admin;
use Test;
use App\Models\Roles;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use GrahamCampbell\ResultType\Result;


class AuthController extends Controller
{
    public function login_auth(){
        return view('admin.custom_auth.login_auth');
    }
    public function register_auth(){
        return view('admin.custom_auth.register');
    }
    public function register(Request $resquest){
         $this->validation($resquest);
         $data=$resquest->all();
         $admin= new Admin();
         $admin->admin_name=$data['admin_name'];
         $admin->admin_phone=$data['admin_phone'];
         $admin->admin_email=$data['admin_email'];
         $admin->admin_password=md5($data['admin_password']);
         $admin->save();
         return redirect('/register-auth')->with('message','Đăng ký thành công ');
    }
    public function validation($resquest){
return $this->validate($resquest,[
    'admin_name'=> 'required|max:255',
    'admin_phone'=> 'required|max:255',
    'admin_email'=> 'required|email|max:255',
    'admin_password'=> 'required|max:255',


]);
    }
}
