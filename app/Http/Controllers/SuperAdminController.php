<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
session_start();
class SuperAdminController extends Controller
{
    public function index(){
      $this->AuthCheck();
      return view('admin.pages.dashboard');
    }

    public function AuthCheck()
    {
    	$admin_id = Session::get('admin_id');

    	if ($admin_id ==NULL) {
    		return Redirect::to('/admin')->send();
    	}
    }

    public function logout()
    {
    	Session::put('admin_id','');
    	Session::put('admin_name','');
    	Session::put('admin_email','');
    	Session::put('access_label','');
    	Session::put('message','You are successfully logout');
    	return Redirect::to('/admin');
    }

    public function Category(){
      return View('admin.Pages.category');
    }

    public function allCategory(){
      $result = DB::table('tbl_category')
                ->get();
      return View('admin.Pages.viewCategory')->with('result', $result);
    }

    // Add Category
    public function categoryCheck(Request $request){
      $data = array();
      $data['category_name'] = $request->category_name;
      $data['publication_status'] = $request->publication_status;
      $data['created_at'] = NOW();

      if ($data['category_name'] == null || $data['publication_status'] == null) {
        Session::put('warning', 'All fields are required');
        return Redirect::to('/category');
      }else{
        $result = DB::table('tbl_category')
                ->select('*')
                ->where('category_name', $data['category_name'])
                ->first();

      if ($result) {
        Session::put('warning', 'Category already exist');
        return Redirect::to('/category');
      }else{

        $result = DB::table('tbl_category')
                  ->insert($data);

        if ($result) {
          Session::put('message', 'Category Inserted!!!');
          return Redirect::to('/category');
        }
      }
    }
  }


  // unpublish_category

  public function unpublish_category($category_id)
  {
    DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->update(['publication_status' => 0]);

    return Redirect::to('/all-category');
  }
  // publish_category
  public function publish_category($category_id)
  {
    DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->update(['publication_status' => 1]);

    return Redirect::to('/all-category');
  }
  // Delete Category
  public function delete_category($category_id)
  {
    DB::table('tbl_category')
            ->where('category_id', $category_id)
            ->delete(['publication_status' => 1]);

    return Redirect::to('/all-category');
  }
}
