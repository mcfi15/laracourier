<?php

namespace App\Http\Controllers\Admin;

use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackController extends Controller
{

    // public function rules(){
    //     return [
    //         'search' => 'required|string'
    //     ];

    // }

    // public function search(){
    //     // $validatedData = $this->validate();
    //     // $query = $this->street
    //     $search_text = $_GET['query'];
    //     $track = Track::where('tracking_id','LIKE', '%'.$search_text.'%')->get();
    //     return view('admin.track.index', compact('track'));
    // }


    public function index(){
        // $track = Track::first();
        // if(request()->has('search')){
        //     $tracks = $track->where('tracking_id','LIKE', '%'.request()->get('search','') . '%');
        // }
        return view('admin.track.index');
    }

    public function searchTrack(Request $request){
        if ($request->search) {
            $searchTrack = Track::where('tracking_id','LIKE', '%'.$request->search.'%')->get();
            $searchTrack_id = Track::where('tracking_id','LIKE', '%'.$request->search.'%')->first();
            return view('admin.track.index', compact('searchTrack', 'searchTrack_id'));
        }else {
            return redirect()->back()->with('error', 'Empty Search, this field cannot be empty');
        }
    }
}
