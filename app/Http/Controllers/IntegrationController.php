<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    //

    public function index(Request $request){

        $name=$request->slug;
        $name=ucfirst($name);
        return view('frontend.pages.integrations.index',compact('name'));
    }
}
