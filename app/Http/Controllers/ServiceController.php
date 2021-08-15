<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    private $filepath="frontend.pages.partners.";
    public function seller(){
        $name="Test";
        return view($this->filepath.'index',compact('name'));
    }
    public function exporter(){
        return view($this->filepath.'exporter');
    }

    public function wholesaler(){
        return view($this->filepath.'wholesaler');
    }
    public function bulkWholesaler(){
        return view($this->filepath.'bulkWholesaler');
    }
    public function onePieceWholesaler(){
        return view($this->filepath.'onePieceWholesaler');
    }
    public function vendor(){
        return view($this->filepath.'vendor');
    }
    public function app(){
        return view($this->filepath.'app');
    }
    public function guru(){
        return view($this->filepath.'guru');
    }
    public function whitelabel(){
        return view($this->filepath.'whitelabel');
    }
    public function franchise(){
        return view($this->filepath.'franchise');
    }
    public function investment(){
        return view($this->filepath.'investment');
    }
    public function smartshop(){
        return view($this->filepath.'smartshop');
    }
}
