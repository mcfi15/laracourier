@extends('layouts.admin-dash')

@section('title', 'Create Parcel')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            @include('layouts.alert.msg')

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">Update Parcel Status</h3>
                </div>
                <div class="card-body">
                    <a href="{{ url('/admin/parcel') }}" class="btn btn-primary btn-sm text-white float-end" >
                        <i class="ti ti-arrow-left"></i>
                        Back
                        
                      </a>
                      <br>
                    <form action="{{ url('admin/parcel-track/'.$track->parcel_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            

                            <h5>Update Status</h5>
                            
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
                                    <option value="Pending" >Pending</option>
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
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
