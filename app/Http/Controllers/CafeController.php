<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    
    public function contact(){
        return view('view.contact');
    }

    public function confirm(){
        return view('view.confirm');
    }

    public function complete(){
        return view('view.complete');
    }
    public function edit(){
        return view('view.edit');
    }

    public function index(Request $request)
    {

    }


























}
