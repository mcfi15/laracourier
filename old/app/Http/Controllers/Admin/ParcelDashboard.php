<?php

namespace App\Http\Controllers\Admin;

use DB;
//use Illuminate\Support\Facades\DB;
use App\Models\Track;
use App\Models\Branch;
use App\Models\Parcel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParcelFormRequest;

class ParcelDashboard extends Controller
{
    public function index(){
        $parcels = Parcel::orderBy('id', 'DESC')->paginate('10');
        return view('admin.parcel.index', compact('parcels'));
    }

    public function create(){
        $branches = Branch::orderBy('id', 'DESC')->get();
        return view('admin.parcel.create', compact('branches','branches'));
    }

    public function store(ParcelFormRequest $request){
        $validatedData = $request->validated();
        
        DB::beginTransaction();
        //dd($validatedData);
        try{
            
            $parcelData = Parcel::create([
                'sender_name' => $validatedData['sender_name'],
                'sender_address' => $validatedData['sender_address'],
                'sender_contact' => $validatedData['sender_contact'],
                'reci_name' => $validatedData['reci_name'],
                'reci_address' => $validatedData['reci_address'],
                'reci_contact' => $validatedData['reci_contact'],
                'tracking_id' => $validatedData['tracking_id'],
                'status' => $validatedData['status'],
                'dep_date' => $validatedData['dep_date'],
                'exp_date' => $validatedData['exp_date'],
                'pickup_date' => $validatedData['pickup_date'],
                'carrier_no' => $validatedData['carrier_no'],
                'branch_pro' => $validatedData['branch_pro'],
                'pickup_branch' => $validatedData['pickup_branch'],
                'total_price' => $validatedData['total_price'],
            ]);

            // $parcel = new Parcel;
            // $parcel->sender_name = $validatedData['sender_name'];
            // $parcel->sender_address = $validatedData['sender_address'];
            // $parcel->sender_contact = $validatedData['sender_contact'];
            // $parcel->reci_name = $validatedData['reci_name'];
            // $parcel->reci_address = $validatedData['reci_address'];
            // $parcel->reci_contact = $validatedData['reci_contact'];
            // $parcel->tracking_id = $validatedData['tracking_id'];
            // $parcel->status = $validatedData['status'];
            // $parcel->dep_date = $validatedData['dep_date'];
            // $parcel->exp_date = $validatedData['exp_date'];
            // $parcel->pickup_date = $validatedData['pickup_date'];
            // $parcel->carrier_no = $validatedData['carrier_no'];
            // $parcel->branch_pro = $validatedData['branch_pro'];
            // $parcel->pickup_branch = $validatedData['pickup_branch'];
            // $parcel->total_price = $validatedData['total_price'];
            // $parcel->save();

            // $parcel_id = Parcel::findOrFail($validatedData['id']);
            $parcel_id = DB::table('parcel')->select('parcel_id')->first();
            $parcel_id = $parcel_id->$parcel_id;

            $parcel_id = Track::create([
                'parcel_id' => $validatedData['parcel_id'],
                'tracking_id' => $validatedData['tracking_id'],
                'updated_date' => $validatedData['updated_date'],
                'updated_time' => $validatedData['updated_time'],
                'cstatus' => $validatedData['cstatus'],
                'location' => $validatedData['location'],
                'remark' => $validatedData['remark'],
            ]);

            // $parcel_id = new Track;
            // $parcel_id->parcel_id = $validatedData['parcel_id'];
            // $parcel_id->tracking_id = $validatedData['tracking_id'];
            // $parcel_id->updated_date = $validatedData['updated_date'];
            // $parcel_id->updated_time = $validatedData['updated_time'];
            // $parcel_id->cstatus = $validatedData['cstatus'];
            // $parcel_id->location = $validatedData['location'];
            // $parcel_id->remark = $validatedData['remark'];
            // $parcel_id->save();

            DB::commit();
            return redirect('admin/parcel')->with('message', 'Parcel Added Successfully');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('message', 'Error! Failed to add parcel');
        }
    }
}
