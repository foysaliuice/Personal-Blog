<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  // Home Page
    public function index(){
      return view('pages.index');
    }
    // Contact-us Page
    public function contact(){
      return view('pages.contact_us');
    }
    // About-us Page
    public function about(){
      return view('pages.about_us');
    }
}
