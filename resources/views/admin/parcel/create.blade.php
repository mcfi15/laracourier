@extends('layouts.admin-dash')

@section('title', 'Create Parcel')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            @include('layouts.alert.msg')

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Create Parcel</h3>
                </div>
                <div class="card-body">
                    <a href="{{ url('/admin/parcel') }}" class="btn btn-primary btn-sm text-white float-end" >
                        <i class="ti ti-arrow-left"></i>
                        Back
                        
                      </a>
                      <br>
                    <form action="{{ url('admin/parcel') }}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <h5>Package Information</h5>

                            <table class="table table-bordered" id="table">
                                <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Parcel Type</th>
                                    <th>Width</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Length</th>
                                    <th>Description</th>
                                    {{-- <th>Price</th>
                                    <th>Action</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="quantity" class="form-control">
                                    </td>
                                    <td>
                                        <select name="type" class="form-control">
                                            <option value="Pallet">Pallet</option>
                                            <option value="Carton">Carton</option>
                                            <option value="Crate">Crate</option>
                                            <option value="Loose">Loose</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="width" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="height" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="weight" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="length" class="form-control">
                                    </td>
                                    <td>
                                        <textarea name="description" id="" class="form-control"></textarea>
                                    </td>
                                    {{-- <td>
                                        <input type="text" name="price" class="form-control">
                                    </td> --}}
                                    {{-- <td>
                                        <button type="button" name="add" id="add" class="btn btn-success"><i
                                                class="ti ti-plus"></i></button>
                                    </td> --}}
                                </tr>
                                </tbody>

                            </table>

                            <hr>
                            <div class="mb-3 col-sm-6">
                                <h5>Sender Information
                                </h5>
                                <label for="" class="col-form-label">Name</label>
                                <input type="text" name="sender_name" class="form-control"/>
                                @error('sender_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                                <label for="" class="col-form-label">Address</label>
                                <input type="text" name="sender_address" class="form-control"/>
                                @error('sender_address')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                                <label for="" class="col-form-label">Contact #</label>
                                <input type="text" name="sender_contact" class="form-control"/>
                                @error('sender_contact')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="mb-3 col-sm-6">

                                <h5>Recipient Information
                                </h5>

                                <label for="" class="col-form-label">Name</label>
                                <input type="text" name="reci_name" class="form-control"/>
                                @error('reci_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror


                                <label for="" class="col-form-label">Address</label>
                                <input type="text" name="reci_address" class="form-control"/>
                                @error('reci_address')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                                <label for="" class="col-form-label">Contact #</label>
                                <input type="text" name="reci_contact" class="form-control"/>
                                @error('reci_contact')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <hr>

                            <h5>Other Information</h5>
                            <div class="col-sm-12 mb-3">
                                <label for="" class="col-form-label">Tracking ID <span
                                        style="color:red">*</span></label>
                                <input type="text" name="tracking_id" class="form-control"/>
                                @error('tracking_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="" class="col-form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="Pending" selected>Pending</option>
                                    <option value="In Transit" >In Transit</option>
                                    <option value="Cargo On Air">Cargo On Air</option>
                                    
                                    <option value="Delivered" >Delivered</option>
                                    <option value="Delayed" >Delayed</option>
                                    <option value="On Hold" >On Hold</option>
                                    <option value="Landing" >Landing</option>
                                    <option value="Clearance" >Clearance </option>
                                    <option value="In  Sorting" >In  Sorting</option>
                                    <option value="In  Process" >In  Process</option>
                                    <option value="In  Progress" >In  Progress</option>
                                    <option value="Arrived" >Arrived</option>
                                    <option value="Shipment Pickup" >Shipment Pickup</option>
                                </select>
                                @error('status')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="" class="col-form-label">Departure Date</label>
                                <input type="date" name="dep_date" class="form-control"/>
                                @error('dep_date')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="" class="col-form-label">Pickup Date</label>
                                <input type="date" name="pickup_date" class="form-control"/>
                                @error('pickup_date')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="" class="col-form-label">Expected Delivery Date</label>
                                <input type="date" name="exp_date" class="form-control"/>
                                @error('exp_date')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                <label for="" class="col-form-label">Carrier Number</label>
                                <input type="text" name="carrier_no" class="form-control"/>
                                @error('carrier_no')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="" class="col-form-label">Branch Processed</label>
                                <select name="branch_pro" class="form-control">
                                    @foreach ($branches as $branch)
                                        <option
                                            value="{{$branch->street.', '.$branch->city.', '.$branch->state.', '.$branch->zip_code.', '.$branch->country.' | '.$branch->contact.' | '.$branch->branch_code }}">{{$branch->street.', '.$branch->city.', '.$branch->state.', '.$branch->zip_code.', '.$branch->country.' | '.$branch->contact.' | '.$branch->branch_code }}</option>

                                    @endforeach
                                </select>

                                @error('branch_pro')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="" class="col-form-label">Pickup Branch</label>
                                <select name="pickup_branch" class="form-control">
                                    @foreach ($branches as $branch)
                                        <option
                                            value="{{$branch->street.', '.$branch->city.', '.$branch->state.', '.$branch->zip_code.', '.$branch->country.' | '.$branch->contact.' | '.$branch->branch_code }}">{{$branch->street.', '.$branch->city.', '.$branch->state.', '.$branch->zip_code.', '.$branch->country.' | '.$branch->contact.' | '.$branch->branch_code }}</option>

                                    @endforeach
                                </select>
                                @error('pickup_branch')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                <label for="" class="col-form-label">Price</label>
                                <input type="number" name="total_price" class="form-control"/>
                                @error('total_price')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                <label for="" class="col-form-label">Images <span style="color:red"><small>(Upload multiple images here)</small></span></label>
                                <input type="file" name="image[]" class="form-control" multiple/>
                                @error('image')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <hr>

                            <h5>Current Status</h5>

                            <div class="mb-3 col-sm-6">

                                <label for="" class="col-form-label">Updated Date</label>
                                <input type="date" name="updated_date" class="form-control"/>
                                @error('updated_date')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                                <label for="" class="col-form-label">Updated Time</label>
                                <input type="time" name="updated_time" class="form-control"/>
                                @error('updated_time')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror


                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="" class="col-form-label">Status</label>
                                <select name="cstatus" class="form-control">
                                    <option value="Pending" selected>Pending</option>
                                    <option value="In Transit">In Transit</option>
                                    <option value="Cargo On Air">Cargo On Air</option>
                                    <option value="Delivered" >Delivered</option>
                                    <option value="Delayed" >Delayed</option>
                                    <option value="On Hold" >On Hold</option>
                                    <option value="Landing" >Landing</option>
                                    <option value="Clearance" >Clearance </option>
                                    <option value="In  Sorting" >In  Sorting</option>
                                    <option value="In  Process" >In  Process</option>
                                    <option value="In  Progress" >In  Progress</option>
                                    <option value="Arrived" >Arrived</option>
                                    <option value="Shipment Pickup" >Shipment Pickup</option>
                                </select>
                                @error('cstatus')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror

                                <label for="" class="col-form-label">Location</label>
                                <input type="text" name="location" class="form-control"/>
                                @error('location')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-sm-12 mb-3">
                                <label for="" class="col-form-label">Remarks</label>
                                <textarea name="remark" class="form-control"></textarea>
                                @error('remark')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Add New Parcel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
