<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class FrontEndController extends Controller
{
    public function SchoolWebsite(){
        return view('frontend.index');
    }//End Method
    public function LoginView(){
        return view('auth.login');
    }//End Method
    public function TeamView(){
        return view('frontend.aboutus.team');
    }//End Method
    public function schoolprofileView(){
        return view('frontend.aboutus.schoolprofile');
    }//End Method
}
