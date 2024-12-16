<?php

namespace App\Http\Controllers;

use App\Models\general;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function viewGeneralSetting()
    {
        $general = general::get()->first();
        return view('backend.general', compact('general'));
    }

    public function storeGeneralSetting(Request $req, string $id)
    {

        $general = general::find($id);

        $req->validate([
            's_title' => 'required',
            's_copyright' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if ($req->hasFile('s_img')) {
            $img_path = public_path('storage/') . $general->s_img;
            if (file_exists($img_path)) {
                @unlink($img_path);
            }

            $path = $req->s_img->store('img', 'public');
        } else {
            $path =  $general->s_img;
        }

        $sname =  'No Name';
        $des =  'No Name';

        $general->update([
            's_img' => $path,
            's_name' => $sname,
            's_title' => $req->s_title,
            's_copyright' => $req->s_copyright,
            's_des' =>  $des,
            's_address' => $req->address,
            's_phone' => $req->phone,
            's_email' => $req->email,
        ]);

        return redirect()->route('viewGeneralSetting')->with(['success','General Setting Update SuccessFuly']);
    }
}
