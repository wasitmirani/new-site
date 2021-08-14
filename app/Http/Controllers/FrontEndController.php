<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    private $file_path="frontend.pages.";
    public function index(){

        return view($this->file_path.'index');
    }

    public function contact(){

        return view($this->file_path."contact");
    }
}
