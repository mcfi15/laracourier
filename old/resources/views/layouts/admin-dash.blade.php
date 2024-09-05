<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('uploads/favicon/'.$appSetting->favicon) }}" />

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    {{-- style --}}
    <link href="{{ asset('admin/css/styles.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

        @include('layouts.inc.admin.sidebar')
        <div class="body-wrapper">
            <header class="app-header">
                @include('layouts.inc.admin.navbar')
            </header>
            <div class="container-fluid">
                @yield('content')
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Copyright © {{ $appSetting->website_name }} 2024 | Alrights Reserved</a></p>
                </div>
            </div>
        </div>

    </div>

    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#add').on('click', function(){
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" name="inputs[0]quantity" class="form-control" /></td>';
                html += '<td>';     
                html += '<select name="inputs[`+i+`][type]" class="form-control">';              
                html += '<option value="Pallet">Pallet</option>';                 
                html += '<option value="Carton">Carton</option>';                  
                html += '<option value="Crate">Crate</option>';                 
                html += '<option value="Loose">Loose</option>';
                html += '<option value="Others">Others</option>';
                html += '</select>';
                html += '</td>';           
                html += '<td><input type="text" name="inputs[0]width" class="form-control" /></td>';
                html += '<td><input type="text" name="inputs[0]height" class="form-control" /></td>';
                html += '<td><input type="text" name="inputs[0]weight" class="form-control" /></td>';
                html += '<td><input type="text" name="inputs[0]length" class="form-control" /></td>';
                html += '<td><textarea name="inputs[0]length" class="form-control" ></textarea></td>';
                html += '<td><input type="text" name="inputs[0]price" class="form-control" /></td>';
                html += '<td><button type="button" class="btn btn-danger remove-table-row"><i class="ti ti-trash"></i></button></td>';
                html += '<tr>';
                $('tbody').append(html);
            })
        });

        // $(document).on('click', '#')
        $(document).on('click','.remove-table-row', function(){
            $(this).parents('tr').remove();
        });

    </script>

    
    
    @livewireScripts
    @stack('script')

    
</body>
</html>
