<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function services(){
        return view('frontend.services');
    }

    public function searchTrack(Request $request){
        if ($request->search) {
            $searchTrack = Track::where('tracking_id','LIKE', '%'.$request->search.'%')->get();
            $searchTrack_id = Track::where('tracking_id','LIKE', '%'.$request->search.'%')->first();
            return view('frontend.result', compact('searchTrack', 'searchTrack_id'));
        }else {
            return redirect()->back()->with('error', 'Empty Search, this field cannot be empty');
        }
    }
}



