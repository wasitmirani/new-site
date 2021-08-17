<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    private $file_path="frontend.pages.";
    public function index(){
        $channels=Integration::take(8)->get();

        return view($this->file_path.'index',compact('channels'));
    }

    public function contact(){

        return view($this->file_path."contact");
    }

    public function about(){
        return view($this->file_path."about");
    }

    public function pricing(){
        return view($this->file_path."pricing");
    }
    public function integrations(){
        $channels=Integration::all();
        return view($this->file_path."integrations",['channels'=>$channels]);
    }




}
