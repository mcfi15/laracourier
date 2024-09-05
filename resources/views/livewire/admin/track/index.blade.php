<div>
    <div class="col-lg-12">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <div class="-dflex w-100 px-1 py-2 justify-content-center align-items-center">
                    <label for="" class="col-form-label">Enter Tracking Number</label>
                    <form wire:submit.prevent="searchParcel">
                    <div class="input-group col-sm-5">
                        
                        <input type="search" wire:model.defer="search" class="form-control form-control-sm" placeholder="Type the tracking number here">
                        @error('search')
                            <small class="text-danger">{{ $message }}</small>  
                          @enderror
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-sm btn-primary btn-gradient-primary">
                                <i class="ti ti-search"></i>
                            </button>
                        </div>

                        
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="timeline" id="parcel_history">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="background">
        <div class="container">
          <div class="row header text-center">
              <div class="col-xs-3 icon-back">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </div>
              <div class="col-xs-6 order">
                <div class="order-number">
                  Order #1893-1
                </div>
                <div class="order-status">
                  In transit
                </div>
              </div>
              <div class="col-xs-3 icon-brand">
                <span class="glyphicon glyphicon-th"></span>
              </div>
            </div>
          <div class="row content">
            <div class="timeline">
              <div class="item">
                <div class="item-label">
                  <div class="item-label-date">
                  10.11.2016
                  </div>
                  <div class="item-label-hour">
                    01:15
                  </div>
                </div>
                <div class="item-description">
                  <div class="item-description-status">
                    The shipment has been successfully delivered
                  </div>
                  <div class="item-description-location">
                    Xiamen
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-label">
                  <div class="item-label-date">
                  13.11.2016
                  </div>
                  <div class="item-label-hour">
                    12:38
                  </div>
                </div>
                <div class="item-description">
                  <div class="item-description-status">
                    The shipment is ready to be picked up
                  </div>
                  <div class="item-description-location">
                    Beijing
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-label">
                  <div class="item-label-date">
                    14.11.2016
                  </div>
                  <div class="item-label-hour">
                    03:24
                  </div>
                </div>
                <div class="item-description">
                  <div class="item-description-status">
                    The shipment has been processed in location
                  </div>
                  <div class="item-description-location">
                    Beijing
                  </div>
                </div>
              </div>
              <div class="item active">
                <div class="item-label">
                  <div class="item-label-date">
                  17.11.2016
                  </div>
                  <div class="item-label-hour">
                    10:19
                  </div>
                </div>
                <div class="item-description">
                  <div class="item-description-status">
                    The shipment has been processed in location
                  </div>
                  <div class="item-description-location">
                    Tianjin
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

    {{-- <div class="d-none">
        <div class="iitem">
            <i class="ti ti-box bg-blue"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> <span class="dtime">12:05</span></span>
              <div class="timeline-body">
                  asdasd
              </div>
            </div>
          </div>
    </div> --}}
</div>
