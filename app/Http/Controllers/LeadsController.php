<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsController extends Controller
{
    public function store(Request $request)
    {
        $data = array
        (
            'name'=>$request->name,
            'email'=>$request->email,
            'client'=>$request->client,
            'phone'=>$request->phone,
            'message'=>$request->message,

        );

        $create = Lead::create($data);
        return redirect()->route('home');
    }
}
