<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href=" {{ asset('uploads/favicon/'.$appSetting->favicon) }} " rel="icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />

    <link href="{{ asset('frontend/assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />

    <style>
        .background{
  background-color: #F6F9FC;
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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
    <div class="preloader">
        <div class="loader-spinner">
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="wrapper clearfix" id="wrapperParallax">

        <header class="header header-1 header-transparent" id="navbar-spy">
            <nav class="navbar navbar-expand-lg  navbar-bordered navbar-sticky" id="primary-menu">
                <div class="container"><a class="navbar-brand" href="/"><img class="logo logo-light"
                            src="{{ asset('uploads/logo/'.$appSetting->logo) }}" alt="Logo" style="width:220px;" /><img class="logo logo-dark"
                            src="{{ asset('uploads/logo/'.$appSetting->logo) }}" alt="Logo" style="width:220px;" /></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                            	<a href="/"><span>Home</span></a>
                            </li>
                            <li class="nav-item">
                            	<a href="about"><span>About</span></a>
                            </li>
                            <li class="nav-item">
                            	<a href="services"><span>Services</span></a>
                            </li>
                            <li class="nav-item">
                            	<a href="contact"><span>Contact</span></a>
                            </li>
                            
                            
                        </ul>
                        <div class="module-container">

                            <!-- <div class="module module-search float-left">
                                <div class="module-icon search-icon"><i class="icon-search"></i><span
                                        class="title">search</span></div>
                                <div class="module-content module-fullscreen module-search-box">
                                    <div class="pos-vertical-center">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                                    <form class="form-search">
                                                        <input class="form-control" type="text"
                                                            placeholder="type words then enter" />
                                                        <button></button>
                                                    </form>

                                                </div>

                                            </div>

                                        </div>

                                    </div><a class="module-cancel" href="javascript:void(0)"><i
                                            class="fas fa-times"></i></a>
                                </div>
                            </div> -->


                            <div class="module-contact">
                                <!-- <a class="btn btn--primary" href="#track">Track & Trace</a> -->
                                <a href="/#track" class="btn btn--primary" >Track Shipment</a>
                            </div>

                            
                        </div>

                    </div>

                </div>

            </nav>
        </header>
            @yield('content')

            <footer class="footer footer-1">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-3 col-xl-4">
                                <div class="footer-logo"><img class="footer-logo" src="{{ asset('uploads/logo/'.$appSetting->logo) }}"
                                        alt="logo" /></div>
                            </div>
                            <div class="col-12 col-lg-9 col-xl-8">
                                <div class="widget-newsletter">
                                    <div class="widget-content">
                                        <p>Sign up for industry alerts,<br />insights from {{ $appSetting->website_name }}.</p>
                                        <form class="form-newsletter mailchimp" action="" method="post">
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Your Email Address" required/>
                                            <input class="btn btn--primary" type="submit" name="news" value="sign up!" />
                                            <div class="subscribe-alert"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-about">
                                <div class="footer-widget-title">
                                    <h5>about</h5>
                                </div>
                                <div class="widget-content">
                                    <p>{{ $appSetting->website_name }} is a representative logistics operator providing full range
                                        of service in the
                                        sphere of customs cargo and transportation worldwide.</p>
            
                                    <div class="module module-social"><a class="share-facebook" href="javascript:void(0)"><i
                                                class="fab fa-facebook-f"> </i></a><a class="share-instagram"
                                            href="javascript:void(0)"><i class="fab fa-instagram"></i></a><a class="share-twitter"
                                            href="javascript:void(0)"><i class="fab fa-twitter"></i></a></div>
            
                                </div>
                            </div>
            
                            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-2 footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5>services</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="javascript:void(0)">warehouse</a></li>
                                        <li><a href="javascript:void(0)">air freight</a></li>
                                        <li><a href="javascript:void(0)">ocean freight</a></li>
                                        <li><a href="javascript:void(0)">road freight</a></li>
                                        <li><a href="javascript:void(0)">supply chain</a></li>
                                        <li><a href="javascript:void(0)">packaging</a></li>
                                    </ul>
                                </div>
                            </div>
            
                            <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                                <div class="footer-widget-title">
                                    <h5>industries</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="javascript:void(0)">retail & consumer</a></li>
                                        <li><a href="javascript:void(0)">sciences & healthcare</a></li>
                                        <li><a href="javascript:void(0)">industrial & chemical</a></li>
                                        <li><a href="javascript:void(0)">power generation</a></li>
                                        <li><a href="javascript:void(0)">food & peverage</a></li>
                                        <li><a href="javascript:void(0)">oil & gas</a></li>
                                    </ul>
                                </div>
                            </div>
            
                            <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-contact">
                                <div class="footer-widget-title">
                                    <h5>quick contact</h5>
                                </div>
                                <div class="widget-content">
                                    <p>If you have any questions or need help, feel free to contact with our team.</p>
                                    <ul>
            
                                        
                                        <li class="address"><a href="javascript:void(0)">{{ $appSetting->email }}</a></li>
                                    </ul>
                                </div>
                            </div>
            
                        </div>
                        <div class="clearfix"></div>
                    </div>
            
                </div>
            
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-12 col-md-12 text--center footer-copyright">
                            <div class="copyright"><span>&copy; Copyright 2024 {{ $appSetting->website_name }}, All Right Reserved.</span></div>
                        </div>
                    </div>
            
                </div>
            
            </footer>
            <div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
            </div>
            
            
            
            <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="{{ asset('frontend/assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/vendor.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/functions.js') }}"></script>
            
            @livewireScripts
            @stack('script')
            </body>
            
            
            
</html>