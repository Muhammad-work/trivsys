<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\general;
use App\Models\portfolio;
use App\Models\trialCustomer;
use App\Models\mailRequest;
use App\Mail\userRequest;
use App\Mail\trial_customer;
use Illuminate\Support\Facades\Mail;

class homeController extends Controller
{
    public function viewHome(){
        $general = general::get()->first();
        return view('front.home',compact('general'));
    }

    public function viewAbout(){
        $general = general::get()->first();
         return view('front.about',compact('general'));
    }

    public function viewWebPage(){
        $general = general::get()->first();
         return view('front.web-services',compact('general'));
    }

    public function viewAppPage(){
        $general = general::get()->first();
         return view('front.app',compact('general'));
    }

    public function viewdigital(){
        $general = general::get()->first();
         return view('front.digital',compact('general'));
    }

    public function viewErp(){
        $general = general::get()->first();
         return view('front.erp',compact('general'));
    }

    public function viewCrm(){
        $general = general::get()->first();
         return view('front.crm',compact('general'));
    }

    public function viewProfile(){
        $general = general::get()->first();
        $portfolio = portfolio::get();
         return view('front.portfoilo',compact(['general','portfolio']));
    }

    public function viewContact(){
        $general = general::get()->first();
         return view('front.contact',compact('general'));
    }

    public function storeClientDetail(Request $req){
        $req->validate([
            'full_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
        ]);

        $service = $req->service ?: 'No service';

        mailRequest::create([
            'service' => $service,
            'name' => $req->full_name,
            'email' => $req->email_address,
            'phone' => $req->phone_number,
            'mesg' => $req->brief,
        ]);

         $subject  = 'Client Request Form Trivsys Website';
         $message = [
            'service' => $service,
            'name' => $req->full_name,
            'email' => $req->email_address,
            'phone' => $req->phone_number,
            'message' => $req->brief,
         ];
     
        Mail::to('balochmuhammad817@gmail.com')->send(new userRequest($message, $subject));
        
        return back()->with(['success' => 'Submit Your Request Successfuly']);
    }

    public function viewTrialForm(){
        $general = general::get()->first();
        return view('front.trial_form',compact('general'));
    }

    public function trialMessage(){
        $general = general::get()->first();
        return view('front.trial_message',compact('general'));
    }


    public function storeTrialCustomerdata(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
       
        trialCustomer::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
        ]);

        $subject = 'Login To ERP ';
        $message = 'Hello '. $req->name .' Login With This Email And Password!';
        $detail=[
            'email' => 'demo123',
            'password' => 'demo123',
            'url' => 'https://trivsys.com/web/login'
        ];

        Mail::to($req->email)->send(new trial_customer($message, $subject,$detail));
        //  $UserName = $req->name;
        return redirect()->route('trialMessage');
    }
}
