<!-- resources/views/create-post.blade.php -->
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
<h1 style="text-align: center; margin-top: 30px; text-shadow: -1px 2px 0 green; color: black;"><b>Edit Appointment</b></h1>
<div class="container" style="width: 60%; margin-top: 20px; border-style: ridge; border-color: black; border-width: 1px; border-radius: 0;background-color:#dedad9">
    <div class="row">
        <div class="col-12" >
           <form class="form" action="{{route('appointments.update', $appointments->id)}}"  method="POST" style="padding:20px">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input type="text" class='form-control' name="name" value="{{ $appointments->name }}" />
                    <label for="floatingInput">Name...</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class='form-control' name="mob_no" value="{{ $appointments->mob_no }}" />
                    <label for="floatingInput">Mobile Number...</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class='form-control' name="date" value="{{ $appointments->date }}"   />
                    <label for="floatingInput">Date...</label>
                </div>
                <div class="form-floating mb-3">
                <select class='form-select' name="slot" value="{{ $appointments->slot }}"   >
                    <option selected>Select slot</option>
                    <option value="07:00 AM">07:00 AM</option><option value="07:30 AM">07:30 AM</option><option value="08:00 AM">08:00 AM</option><option value="08:30 AM">08:30 AM</option>
                    <option value="09:00 AM">09:00 AM</option><option value="09:30 AM">09:30 AM</option><option value="10:00 AM">10:00 AM</option><option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option><option value="11:30 AM">11:30 AM</option><option value="12:00 PM">12:00 PM</option><option value="12:30 PM">12:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option><option value="02:30 PM">02:30 PM</option><option value="03:00 PM">03:00 PM</option><option value="03:30 PM">03:30 PM</option>
                    <option value="04:00 PM">04:00 PM</option><option value="04:30 PM">04:30 PM</option><option value="05:00 PM">05:00 PM</option><option value="05:30 PM">05:30 PM</option>
                    <option value="06:00 PM">06:00 PM</option><option value="06:30 PM">06:30 PM</option><option value="07:00 PM">07:00 PM</option><option value="07:30 PM">07:30 PM</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" style="width:100%">Book</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
