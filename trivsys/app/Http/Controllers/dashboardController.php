<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio;
use App\Models\mailRequest;

class dashboardController extends Controller
{
    public function viewDashboard(){
        $mailRequestCount = mailRequest::whereDate('created_at', today())->count();         
        return view('backend.dashbord',compact('mailRequestCount'));
    }

    public function viewPortfolio(){
        $portfolio = portfolio::get();
        return view('backend.portfolio',compact('portfolio'));
    }

    public function viewAddPortfolioForm(){
        return view('backend.add_portfolio');
    }

    public function storePortfolio(Request $req){
        
        $req->validate([
            'img' => 'required',
            'title' => 'required',
            'Description' => 'required',        
        ]);

        $path = $req->img->store('img', 'public');

        portfolio::create([
            'img' =>   $path,
            'title' => $req->title,
            'des' => $req->Description,
        ]);

        return redirect()->route('viewPortfolio')->with(['success' => 'Add New Portfolio successfuly']);

    }


    public function editPortfolioViewForm(string $id){
        
        $portfolio = portfolio::find($id);
           
         return view('backend.edit_portfolio',compact('portfolio'));
    }


    public function UpdatePortfolio(Request $req,string $id){
        
        $req->validate([
            'title' => 'required',
            'Description' => 'required',        
        ]);

    
        $portfolio = portfolio::find($id);
        if ($req->hasFile('img')) {
            $img_path = public_path('storage/') . $portfolio->img;
            if (file_exists($img_path)) {
                @unlink($img_path);
            }

            $path = $req->img->store('img', 'public');
        } else {
            $path =  $portfolio->img;
        }


        $portfolio->update([
            'img' =>   $path,
            'title' => $req->title,
            'des' => $req->Description,
        ]);

        return redirect()->route('viewPortfolio')->with(['success' => 'Update Portfolio successfuly']);

    }

    public function deletePortfolio(string $id){
        $portfolio = portfolio::find($id);

        $portfolio->delete();
        return redirect()->route('viewPortfolio')->with(['success' => 'Deleted Portfolio successfuly']);
    }

    public function viewClientTable(){
        
         $mail_requests = mailRequest::get();
         
        return view('backend.client',compact('mail_requests'));
    }
}
