<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SettingFormRequest;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function store(SettingFormRequest $request){
        $validatedData = $request->validated();
      
        $setting = Setting::first();
        

        if($setting){
            //update setting
            // $setting = Setting::findOrFail($setting);

            $setting->website_name = $validatedData['website_name'];
            $setting->website_url = $validatedData['website_url'];
            $setting->page_title = $validatedData['page_title'];
            $setting->meta_keywords = $validatedData['meta_keywords'];
            $setting->meta_description = $validatedData['meta_description'];
            $setting->address = $validatedData['address'];
            $setting->phone = $validatedData['phone'];
            $setting->email = $validatedData['email'];

            if($request->hasFile('logo')){

                $path = 'uploads/logo/'.$setting->logo;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/logo/',$filename);
                $setting->logo = $filename;
            }

            if($request->hasFile('favicon')){

                $path = 'uploads/favicon/'.$setting->favicon;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('favicon');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/favicon/',$filename);
                $setting->favicon = $filename;
            }

            $setting->update();

            return redirect()->back()->with('message', 'Setting Saved Successfully');
            

        }else{
            //create new data
            $setting = new Setting;

            $setting->website_name = $validatedData['website_name'];
            $setting->website_url = $validatedData['website_url'];
            $setting->page_title = $validatedData['page_title'];
            $setting->meta_keywords = $validatedData['meta_keywords'];
            $setting->meta_description = $validatedData['meta_description'];
            $setting->address = $validatedData['address'];
            $setting->phone = $validatedData['phone'];
            $setting->email = $validatedData['email'];

            
            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/logo/',$filename);
                $setting->logo = $filename;
            }

            if($request->hasFile('favicon')){
                $file = $request->file('favicon');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/favicon/',$filename);
                $setting->favicon = $filename;
            }

            // Setting::create([
            // 'website_name' => $request->website_name,
            // 'website_url' => $request->website_url,
            // 'page_title' => $request->page_title,
            // 'meta_keywords' => $request->meta_keywords,
            // 'meta_description' => $request->meta_description,
            // 'address' => $request->address,
            // 'email' => $request->email,
            // 'phone' => $request->phone
            // // $logoname => $request->logo,
            // // $filename => $request->favicon
            // ]);

            $setting->save();
            
            return redirect()->back()->with('message', 'Setting Saved Successfully');
        }
    }

}