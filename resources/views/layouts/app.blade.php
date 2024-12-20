<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/img/apple-icon.png')}}">
    <link rel="icon" type="ico" href="{{ asset('favicon.ico') }}">
    <title>
            QuickieWash
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{url('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{url('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{url('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{url('assets/css/argon-dashboard.css')}}" rel="stylesheet" />
    <style>
        .modal-header {
            background-color: #f56d37;
            color: white;
        }

        .btn-primary {
            background-color: #f56d37;
            border: none;
        }
    </style>

</head>

<body class="{{ $class ?? '' }}">

    @guest
        @yield('content')
    @endguest

    @auth
        @if (in_array(request()->route()->getName(), ['login', 'register', 'recover-password']))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile']))
            <div class="position-absolute w-100 min-height-300 top-0" style="background-color: #f56d37;">
</div>

            @elseif (in_array(request()->route()->getName(), ['profile']))
            <div class="position-absolute w-100 min-height-300 top-0" style="background-color: #f56d37;">
</div>

            @endif

            @include('layouts.navbars.auth.sidenav')
                <main class="main-content border-radius-lg">
                    @yield('content')
                </main>
        @endif
    @endauth

    <!--   Core JS Files   -->
    <script src="{{url('assets/js/core/popper.min.js')}}"></script>
    <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{url('assets/js/argon-dashboard.js')}}"></script>
    @stack('js');
</body>

</html>
