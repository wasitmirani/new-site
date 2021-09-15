<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    //
    private $file_path="frontend.pages.resources.";


    public function resourceHub(){

        return view($this->file_path.'hub');
    }

    public function blogs(){

        return view($this->file_path.'blogs');
    }


    public function webinars(){

        return view($this->file_path.'webinars');
    }
    public function academy(){

        return view($this->file_path.'academy');
    }
    public function tour(){

        return view($this->file_path.'tour');
    }
    public function guru(){

        return view($this->file_path.'guru');
    }
    public function app(){

        return view($this->file_path.'app');
    }
    public function hotproducts (){

        return view($this->file_path.'hotproducts');
    }
    public function help (){

        return view($this->file_path.'help');
    }
    public function freetool (){

        return view($this->file_path.'freetools');
    }




}
