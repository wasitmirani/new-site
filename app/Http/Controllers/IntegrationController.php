<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    //

    public function index(Request $request){

        $name=$request->slug;
        $channels=Integration::take(8)->get();
        $channel=Integration::where('slug',$name)->with('integrationSection','integrationCard')->first();
        if(empty($channel)){
            return back();
        }
        return view('frontend.pages.integrations.index',compact('channel','channels'));
    }
}
