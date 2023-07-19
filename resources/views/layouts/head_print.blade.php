<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Kitabah Muallem.id</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css">
    <style>
        @page {
            size: auto;
            margin: 0;
        }
    </style>
</head>

{{-- For Printing not Exporting --}}

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('files/logo_bsa.png') }}" width="250px" alt="Logo BSA">
                <br>
                <br>
                @yield('content-title')
            </div>
        </div>
        @yield('content')
    </div>
    @yield('js')
</body>

</html>
