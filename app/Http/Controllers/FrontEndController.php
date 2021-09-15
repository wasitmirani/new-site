<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Integration;
use App\Models\Blog;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    private $file_path = "frontend.pages.";
    public function index()
    {
        $channels = Integration::take(8)->get();
        $pricing_list = Pricing::orderBy('sort', 'ASC')->take(2)->with('pricingAddons')->get();

        return view($this->file_path . 'index', compact('channels', 'pricing_list'));
    }

    public function contact()
    {

        return view($this->file_path . "contact");
    }

    public function smartshop()
    {

        return view($this->file_path . "smartshop");
    }

    public function whiteable()
    {

        return view($this->file_path . "whiteable");
    }

    public function investment()
    {

        return view($this->file_path . "investment");
    }

    
    public function franchise()
    {

        return view($this->file_path . "franchise");
    }
    public function about()
    {
        return view($this->file_path . "about");
    }
    public function privacy()
    {
        return view($this->file_path . "privacy-policy");
    }
    public function terms()
    {
        return view($this->file_path . "terms-and-Conditions");
    }
    public function step()
    {
        return view($this->file_path . "GuideStepbyStep");
    }
    public function Works()
    {
        return view($this->file_path . "HowDropShippingWorks");
    }
    public function return()
    {
        return view($this->file_path . "OurReturnsandExchange");
    }
    public function what()
    {
        return view($this->file_path . "whatisdropshipping");
    }
    public function shipping()
    {
        return view($this->file_path . "shipping");
    }
    public function cookies()
    {
        return view($this->file_path . "cookies-policy");
    }


    public function pricing()
    {
        $pricing_list = Pricing::orderBy('sort', 'ASC')->with('pricingAddons')->get();

        return view($this->file_path . "pricing", compact('pricing_list'));
    }
    public function integrations()
    {
        $channels = Integration::all();
        return view($this->file_path . "integrations", ['channels' => $channels]);
    }
}
