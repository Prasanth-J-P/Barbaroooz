<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barbaroooz</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> 

    </head>
    <body class="font-sans">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Barbaroooz <i class="fa fa-scissors" aria-hidden="true"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
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
<div class="container-flex">
    <div class="row">
        <div class="col-md-6 m-0 p-0" style="background-image: url('/images/bridepic.jpg');  background-size: cover; height:89vh">
            <div style="width:100%;height:100%;background:black;opacity:30%">
                <h1 style="color:white; float:right">BRIDE MAKEOVER</h1>
            </div>
        </div>
        <div class="col-md-6 m-0 p-0" style="background-image: url('/images/groompic.jpg');  background-size: cover;height:89vh">
            <div style="width:100%;height:100%;background:black;opacity:30%"><br/><br/><br/><br/>
            <h1 style="color:white; float:left">GROOM MAKEOVER</h1>
        </div>
        </div>
    </div>

</div>
    </body>
</html>
