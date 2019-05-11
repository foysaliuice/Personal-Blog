<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
session_start();
class AdminController extends Controller
{

    public function index(){
      $this->AuthCheck();
        return view('admin.pages.login');
    }

    public function AuthCheck()
    {
      $admin_id = Session::get('admin_id');

      if ($admin_id != NULL) {
        return Redirect::to('/dashboard')->send();
      }
    }

    public function AdminLoginCheck(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

        $result = DB::table('admin')
                ->select('*')
                ->where('admin_email', $admin_email)
                ->where('admin_password', md5($admin_password))
                ->first();

        if ($result) {
          Session::put('admin_id', $result->admin_id);
          Session::put('admin_name', $result->admin_name);
          Session::put('admin_email', $result->admin_email);
          Session::put('access_label', $result->access_label);
          return Redirect::to('/dashboard');
        }else{
          Session::put('exception', 'Email or Password Incorrect!!!');
          return Redirect::to('/admin');
        }
    }
}
