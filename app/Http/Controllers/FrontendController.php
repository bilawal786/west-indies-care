<?php

namespace App\Http\Controllers;

use App\Website;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $content = Website::find(1);
        return view('front.index', compact('content'));
    }
    public function admin(){
        return view('auth.admin');
    }
}
