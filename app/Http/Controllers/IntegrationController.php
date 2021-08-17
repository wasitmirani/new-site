<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    //

    public function index(Request $request){

        $name=$request->slug;

        $channel=Integration::where('slug',$name)->first();
        if(empty($channel)){
            return back();
        }
        return view('frontend.pages.integrations.index',compact('channel'));
    }
}
