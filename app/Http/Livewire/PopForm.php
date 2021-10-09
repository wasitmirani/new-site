<?php

namespace App\Http\Livewire;
use App\Models\Lead;
use Livewire\Component;

class PopForm extends Component
{
     public $name,$phone,$email,$subject,$source="",$message;
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone'=>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
        'message'=>'required|min:10'
    ];
    public function render()
    {
        return view('livewire.pop-form');
    }
     public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function resetForm(){
        $this->name="";
        $this->phone="";
        $this->email="";
        $this->message="";
    }
    public function sendInquiry(){
        $this->validate();
        // try {
            $inquiry= Lead::create([
                'name'=>$this->name,
                'email'=>$this->email,
                'phone'=>$this->phone,
                'message'=>$this->message,
                'client'=>$this->source,
            ]);
            $this->resetForm();

            // Mail::to(env('LEAD_EMAIL'))->send(new InquiryMail($inquiry));
            session()->flash('message', 'Thank you for your interest in our product or service');
        // } catch (\Throwable $th) {

        //     // dd
        //     // return redirect()->route('thankYou');
        // }


    }
}
