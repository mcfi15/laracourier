<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href=" {{ asset('uploads/favicon/'.$appSetting->favicon) }} " rel="icon" />
  <title>Tracking Result | {{ config('app.name', 'Laravel') }}</title>

  <style>
    .background{
  background-color: #36454f;
  padding-top: 10px;
  padding-bottom: 10px;
  .container{
    border-radius: 40px;
    background-color: #fff;
    max-width: 450px;
    height: 900px;
    .header{
      border: 1px solid lightgray;
      padding: 40px 0px 20px 0px;
      margin-top: 100px;
      margin-left: 10px;
      margin-right: 10px;
      .icon-back{
        font-size: 30px;
        color: #11D1A8;
      } 
      .order{
        .order-number{
          font-size: 20px;
          font-weight: bold;
          color: #0A0A0A;
        }
        .order-status{
          color: #F29702;
          font-weight: 600;
        }
      }
      .icon-brand{
        font-size: 30px;
        color: #11D1A8;
      }
    }
    .content{
        border: 1px solid lightgray;
        padding: 20px 0px;
        margin-left: 10px;
        margin-right: 10px;
        .timeline{
          .item{
            &.active{
              .item-description{
                 &:before{
                   background-color: #11D1A8;
                 }
               }
            }
            position: relative;
            border-bottom: 1px solid lightgray;
            padding: 20px 20px;
            margin-left: 10px;
            margin-right: 10px;
            &:last-child{
              border-bottom: none;
              &:before{
                display: none;
              }
            }
            &:before{
              border-left: 3px solid #11D1A8;
              content: '';
              z-index: 0;
              height: 102%;
              left: 135px;
              position: absolute;
              opacity: 0.4;
            }
            .item-label{
              position: absolute;
              .item-label-date{
                color: #A6A6A6;
                font-size: 17px;
                font-weight: 500;
                padding-bottom: 5px;
              }
              .item-label-hour{
                font-weight: 600;
                font-size: 19px;
                float: right;
              }
            }
            .item-description{
              &:before{
                border: 2px solid #11D1A8;
                width: 22px;
                height: 22px;
                border-radius: 100%;
                content: '';
                z-index: 0;
                left: 125px;
                position: absolute;
                background-color: #fff;
                display: block;
              }
              margin-left: 150px;
              margin-bottom: 20px;
              .item-description-status{
                font-weight: 600;
                font-size: 16px;
                padding-bottom: 5px;
              }
              .item-description-location{
                color: #A6A6A6;
                font-size: 15px;
                font-weight: 500;
              }
            }
          }
        }
     }
  }
}


  </style>
</head>
<body>
<center>
  <div class="background">
    <div class="container">
      <div class="row header text-center">
          <div class="col-xs-3 icon-back">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </div>
          <div class="col-xs-6 order">
            <div class="order-number">
              Tracking Result
            </div>
            {{-- <div class="order-status">
              In transit
            </div> --}}
          </div>
          <div class="col-xs-3 icon-brand">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
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
</center>
</body>
</html>