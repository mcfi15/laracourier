@extends('layouts.admin-dash')

@section('title', 'Admin Settings')

@section('content')


<div class="row">
    <div class="col-md-12 grid-margin">
        @include('layouts.alert.msg')
        <form action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website - Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                            <label for="" class="col-form-label">Website Name</label>
                            <input type="text" name="website_name" value="{{ $setting->website_name }}" class="form-control" />
                            @error('website_name')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                            
                        </div>

                        <div class="mb-3 col-sm-6">
                            <label for="" class="col-form-label">Website URl</label>
                            <input type="text" name="website_url" value="{{ $setting->website_url }}" class="form-control" />
                            @error('website_url')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                            
                        </div>

                        <div class="col-sm-12 mb-3">
                            <label for="" class="col-form-label">Page Title</label>
                            <input type="text" name="page_title" value="{{ $setting->page_title }}" class="form-control" />
                            @error('page_title')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="col-sm-6 mb-3">
                            <label for="" class="col-form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control">{{ $setting->meta_keywords }}</textarea>
                            @error('meta_keywords')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="col-sm-6 mb-3">
                            <label for="" class="col-form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control">{{ $setting->meta_description }}</textarea>
                            @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                    </div>

                </div>

            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website - Information</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-sm-12">
                            <label for="" class="col-form-label">Address</label>
                            <textarea name="address" class="form-control">{{ $setting->address }}</textarea>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="mb-3 col-sm-6">
                            <label for="" class="col-form-label">Phone</label>
                            <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control" />
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="col-sm-6 mb-3">
                            <label for="" class="col-form-label">Email</label>
                            <input type="text" name="email" value="{{ $setting->email }}" class="form-control" />
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                    </div>

                </div>

            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Website - Images</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        

                        <div class="mb-3 col-sm-6">
                            <img src="{{ asset('uploads/logo/'.$setting->logo) }}" alt="" width="100" height="100">
                            <br><br>
                            <label for="" class="col-form-label">Website Logo</label>
                            <input type="file" name="logo" class="form-control" />
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                        <div class="col-sm-6 mb-3">
                            <img src="{{ asset('uploads/favicon/'.$setting->favicon) }}" alt="" width="100" height="100">
                            <br><br>
                            <label for="" class="col-form-label">Website Favicon</label>
                            <input type="file" name="favicon" class="form-control" />
                            @error('favicon')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>

                    </div>

                    <br><br>

                    <button type="submit" class="btn btn-primary">Save Settings</button>
                    

                </div>

                

            </div>
        </form>
    </div>


    {{-- <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit Settings
              
            </h5>
            <div class="card">
              <div class="card-body">
               
                <form action="{{ url('admin/setting') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    
                  
                  <div class="mb-3 row">
                    <label for="sitename" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="sitename" class="form-control" id="sitename" value="">
                        @error('sitename')
                          <small class="text-danger">{{ $message }}</small>  
                        @enderror
                    </div>
                  </div>

                  
                  
                  <button type="submit" class="btn btn-primary">Update Setting</button>
                </form>
               
              </div>
            </div>
            
           
          </div>
        </div>
      </div> --}}

</div>

    
@endsection