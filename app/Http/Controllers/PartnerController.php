<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Contact;
use App\Models\Blog;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('frontend.pages.resources.blog');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = array
        (
            'title'=>$request->title,
            'name'=>$request->name,
            'description'=>$request->description,

        );
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = date('dmY').time(). '.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"), $fileName);
            $data['image'] = $fileName;
        }
        $create = Blog::create($data);
        return redirect()->route('resources.blogs');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'source'=>$request->source,
            'subject'=>$request->subject,
            'message'=>$request->message
        );


   $create = Contact::create($data);
        return redirect()->back()->with('message','your message has been sent successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
