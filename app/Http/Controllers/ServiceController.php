<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Integration;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    private $filepath="frontend.pages.partners.";
    public function getPartner(Request $request){
        $partner=Partner::where('slug',$request->slug)->with('partnerCard','partnerSection','partnerFutures')->first();
        $channels=Integration::take(8)->get();

        return view($this->filepath.'index',compact('partner','channels'));
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
    public function seller(){
        return view($this->filepath.'seller');
    }
}
