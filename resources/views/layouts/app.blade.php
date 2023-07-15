<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">

    @livewireStyles
    <style>

    .navbar{
        z-index: 999;
    }
         .sidebar {
        position: fixed;
        padding-top: 70px;
         /* Adjust the value as needed to create the desired margin-top */
        left: 0;
        width: 200px;
        height: 100%;
        background-color: #f1f1f1;
        z-index: 99; /* Ensure the sidebar appears above other elements */
    }
    
    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }
    
    .sidebar ul li {
        padding: 10px;
    }
    
    .sidebar ul li a {
        text-decoration: none;
        color: #333;
    }
         /* Existing CSS styles for the sidebar */
    
    @media (max-width: 767px) {
        /* Hide the sidebar and display a hamburger menu */
        .sidebar {
            display: none;
        }
        .sidebar2 {
            display: none;
        }
        
        /* Show the hamburger menu icon */
        .hamburger-menu {
            display: block;
            position: fixed;
            top: 10px;
            left: 10px;
            width: 30px;
            height: 30px;
            background-color: #f1f1f1;
        }
    }
    </style>
    
@stack('css')
</head>
<body>
    <div id="app">


        <div class="sidebar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                        <li class="sidebar2"><a href="#" class="text-decoration-none text-dark">Home</a></li>
                        <li class="sidebar2"><a href="#" class="text-decoration-none text-dark">About</a></li>
                        <li class="sidebar2"><a href="#" class="text-decoration-none text-dark">Services</a></li>
                        <li class="sidebar2"><a href="#" class="text-decoration-none text-dark">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      
        <main class="py-4 content">
            
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts

    <script>

        window.livewire.on('SwalSuccess', (title, message) => {
            Swal.fire({
                type: 'success',
                title: title,
                text: message,
            });
        });
        window.livewire.on('SwalError', (title, message) => {
            Swal.fire({
                type: 'error',
                title: title,
                text: message,
            });
        });

        window.livewire.on('onSuccessStore', () => {
            $('#detailModal').modal('hide');
        })
        $(document).ready(function() {
        $('.navbar-toggler').click(function() {
            $('.sidebar2').toggle();
        });
    });
    </script>

@yield('js')
@stack('js')
</body>
</html>
