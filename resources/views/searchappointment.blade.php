<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barbaroooz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Barbaroooz <i class="fa fa-scissors" aria-hidden="true"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/books/create">Book Appointment</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/books/listappointments">View Appointments</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container my-auto">
        <form class="form" action="{{ route('getappointments.index') }}" method="POST" style="text-align:center">
            @csrf
            <input type="number" id="search" placeholder="Enter your Mobile Number" name="search" style=" position:relative;width: 60vw;height: 6vh;margin-left: 15px; padding-left: 20px; margin-top: 3px; border-bottom-left-radius: 15px; border-top-left-radius: 15px; ">
            <button type="submit" class="btn btn-info" style=" position:absolute;height: 6vh;  margin-left: -16px; margin-top:3px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; padding-top: 2px;">Search</button>
        </form>
        </div>
    </body>
</html>