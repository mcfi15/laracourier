<?php

namespace App\Http\Controllers\Admin;

// use DB;
use App\Models\Track;
use App\Models\Branch;
use App\Models\Images;
use App\Models\Parcel;
use App\Models\Packages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ParcelFormRequest;
use App\Http\Requests\UpdateParcelFormRequest;

class ParcelDashboard extends Controller
{
    public function index()
    {
        $parcels = Parcel::orderBy('id', 'DESC')->paginate('10');
        return view('admin.parcel.index', compact('parcels'));
    }

    public function create()
    {
        $branches = Branch::all();
        return view('admin.parcel.create', compact('branches', 'branches'));
    }

    public function storeData(ParcelFormRequest $request)
    {
        Log::info('Form submitted', $request->all());

        $validatedData = $request->validated();

        try {
            DB::beginTransaction();
            //dd($validatedData);
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

            Packages::create([
                'parcel_id' => $parcelData->id,
                
                'tracking_id' => $validatedData['tracking_id'],
                'quantity' => $validatedData['quantity'],
                'type' => $validatedData['type'],
                'width' => $validatedData['width'],
                'length' => $validatedData['length'],
                'height' => $validatedData['height'],
                'weight' => $validatedData['weight'],
                'description' => $validatedData['description'],
            ]);

            Track::create([
                'parcel_id' => $parcelData->id,
                
                'tracking_id' => $validatedData['tracking_id'],
                'updated_date' => $validatedData['updated_date'],
                'updated_time' => $validatedData['updated_time'],
                'cstatus' => $validatedData['cstatus'],
                'location' => $validatedData['location'],
                'remark' => $validatedData['remark'],
            ]);

            if($request->hasFile('image')){
                $uploadPath = 'uploads/parcel/';

                $i = 1;
                foreach($request->file('image') as $image){
                    $extension = $image->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extension;
                    $image->move($uploadPath,$filename);
                    $fileImagePathName = $filename;

                    Images::create([
                        'parcel_id' => $parcelData->id,
                        'image' => $fileImagePathName,
                    ]);
                }
            }


            DB::commit();

            return redirect('admin/parcel')->with('message', 'Parcel Added Successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Failed to add parcel: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error! Failed to add parcel. Please try again.');
        }
    }

    public function edit(int $parcel_id){
        $branches = Branch::orderBy('id', 'DESC')->get();
        $parcel = Parcel::findOrFail($parcel_id);
        $packages = Packages::where('parcel_id', $parcel_id)->first();
        
        return view('admin.parcel.edit', compact('parcel', 'branches', 'packages'));
    }

    public function update(UpdateParcelFormRequest $request, int $parcel_id){
        $validatedData = $request->validated();
        $parcel = Parcel::findOrFail($parcel_id);
        $packages = Packages::where('parcel_id', $parcel_id)->first();
        $track = Track::where('parcel_id', $parcel_id)->first();
        //$packages = Packages::where('parcel_id', $parcel_id)->first();

        if($parcel){
            $parcel->update([
                'tracking_id' => $validatedData['tracking_id'],
                'sender_name' => $validatedData['sender_name'],
                'sender_address' => $validatedData['sender_address'],
                'sender_contact' => $validatedData['sender_contact'],
                'reci_name' => $validatedData['reci_name'],
                'reci_address' => $validatedData['reci_address'],
                'reci_contact' => $validatedData['reci_contact'],
                'status' => $validatedData['status'],
                'dep_date' => $validatedData['dep_date'],
                'exp_date' => $validatedData['exp_date'],
                'pickup_date' => $validatedData['pickup_date'],
                'carrier_no' => $validatedData['carrier_no'],
                'branch_pro' => $validatedData['branch_pro'],
                'pickup_branch' => $validatedData['pickup_branch'],
                'total_price' => $validatedData['total_price'],
            ]);
            //$packages = Packages::where('parcel_id', $parcel)->first();

            $packages->update([
                'parcel_id' => $parcel->id,
                'tracking_id' => $validatedData['tracking_id'],
                'quantity' => $validatedData['quantity'],
                'type' => $validatedData['type'],
                'width' => $validatedData['width'],
                'length' => $validatedData['length'],
                'height' => $validatedData['height'],
                'weight' => $validatedData['weight'],
                'description' => $validatedData['description'],
            ]);

            $track->update([
                'parcel_id' => $parcel->id,
                'tracking_id' => $validatedData['tracking_id'],
            ]);


            if($request->hasFile('image')){
                $uploadPath = 'uploads/parcel/';

                $i = 1;
                foreach($request->file('image') as $image){
                    $extension = $image->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extension;
                    $image->move($uploadPath,$filename);
                    $fileImagePathName = $filename;

                    Images::create([
                        'parcel_id' => $parcel->id,
                        'image' => $fileImagePathName,
                    ]);
                }
            }

            return redirect('admin/parcel')->with('message', 'Parcel Updated Successfully');
        }else{
            return redirect()->back()->with('error', 'Error! Unable to update.');
        }
    }

    public function destroyImage(int $parcel_image_id){
        $image = Images::findOrFail($parcel_image_id);
        $path = 'uploads/parcel/'.$image->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $image->delete();
        return redirect()->back()->with('message', 'Parcel Image Deleted Successfully');
    }

    public function destroy(int $parcel_id){
        $parcel = Parcel::findOrFail($parcel_id);
        if($parcel->images){
            foreach ($parcel->images as $image) {
                $path = 'uploads/parcel/'.$image->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
        }
        $parcel->delete();
        return redirect()->back()->with('message', 'Parcel Deleted Successfully');
    }


    Public function editStatus(int $parcel_id){
        $track = Track::where('parcel_id', $parcel_id)->first();
        return view('admin.parcel.status', compact('track'));
    }

    public function updateStatus(UpdateParcelFormRequest $request, int $parcel_id){
        $validatedData = $request->validated();
        $track = Track::where('parcel_id', $parcel_id)->first();
        
        if($track){
            
            Track::create([
                'parcel_id' => $track->parcel_id,
                'tracking_id' => $track->tracking_id,
                'updated_date' => $validatedData['updated_date'],
                'updated_time' => $validatedData['updated_time'],
                'cstatus' => $validatedData['cstatus'],
                'location' => $validatedData['location'],
                'remark' => $validatedData['remark'],
            ]);
            return redirect('admin/parcel')->with('message', 'Parcel Status Updated Successfully');
        }else{
            return redirect()->back()->with('error', 'Error! Unable to update status.');
        }
    }

    public function viewReceipt(int $parcel_id){
        $parcel = Parcel::findOrFail($parcel_id);
        $packages = Packages::where('parcel_id', $parcel_id)->first();
        return view('admin.parcel.view-receipt', compact('parcel', 'packages'));
    }
}
