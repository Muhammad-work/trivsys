<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\general;

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
         return view('front.portfoilo',compact('general'));
    }

    public function viewContact(){
        $general = general::get()->first();
         return view('front.contact',compact('general'));
    }
}
