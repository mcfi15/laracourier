@extends('layouts.admin-dash')

@section('title', 'Track Parcel')

@section('content')

<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-body">
            @include('layouts.alert.msg')
            <div class="-dflex w-100 px-1 py-2 justify-content-center align-items-center">
                <label for="" class="col-form-label">Enter Tracking Number</label>
                <form action="{{ url('admin/search') }}" method="GET" >
                    
                    <div class="input-group col-sm-5">
                          
                        
                        <input type="text" name="search" value="" class="form-control" placeholder="Type the tracking number here">
                        @error('search')
                            <small class="text-danger">{{ $message }}</small>  
                        @enderror
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary btn-gradient-primary">
                                <i class="ti ti-search"></i>
                            </button>
                        </div>

                        
                    </div>
                </form>
            </div>


            
        </div>

        

        @if(request('search'))
            
        <div class="background">
            <div class="container">

                {{-- <div class="row header text-center">
                  <div class="col-xs-3 icon-back">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </div>
                  <div class="col-xs-6 order">
                    <div class="order-number">
                      Tracking ID: {{ $searchTrack_id->tracking_id }}
                    </div>
                    
                  </div>
                  <div class="col-xs-3 icon-brand">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div> --}}
              <div class="row content">
                <div class="timeline">

                @forelse ($searchTrack as $item)
                <div class="item">
                    <div class="item-label">
                        <div class="item-label-date">
                            <span style="color:red">{{ $item->cstatus }}</span>
                            
                            </div>
                      <div class="item-label-date">
                      {{ $item->updated_date }}
                      </div>
                      <div class="item-label-hour">
                        {{ $item->updated_time }}
                      </div>
                    </div>
                    <div class="item-description">
                        <h6>Tracking ID: {{ $item->tracking_id }}</h6>
                      <div class="item-description-status">
                        {{ $item->remark }}
                      </div>
                      <div class="item-description-location">
                        {{ $item->location }}
                      </div>
                    </div>
                  </div>
                @empty
                    <h4>Tracking ID not found</h4>
                @endforelse

                </div>
              </div>
          </div>
        </div>
        @endif
        

    


</div>



@endsection