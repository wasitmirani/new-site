<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class LeadsController extends Controller
{
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'client' => $request->client,
            'phone' => $request->phone,
            'message' => $request->message,

        );
        $maildata = [
            'title' => 'fasdfasdfdfasd',
            'body' => 'fasdfasdfsdfasdfasdfasdfasdfasd',
        ];
        // Mail::to($request->email)->send(new InquiryMail($maildata));

        $create = Lead::create($data);
        return redirect()->route('home');
    }
}
