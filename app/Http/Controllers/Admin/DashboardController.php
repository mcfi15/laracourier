<?php

namespace App\Http\Controllers\Admin;

use App\Models\Parcel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $parcels = Parcel::orderBy('id', 'DESC')->paginate('10');
        return view('admin.dashboard', compact('parcels'));
    }
}
