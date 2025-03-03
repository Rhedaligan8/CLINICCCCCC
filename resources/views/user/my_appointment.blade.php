<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>CliniQuickAid</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
      <div class="container">
      <img src="../assets/img/person/svfctrans.png" alt="logo " style="width:auto; height: 60px;"/>
        <a class="navbar-brand" href="home"><span class="text-primary"><span style="color:#f204f2;">Clini</span></span>-QuickAid</a>
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Announcements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link bg-light" style="background-color:#00D9A5;" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else
            
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            
            @endif
         
        
        </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

   <div align="center" style="padding:70px; ">
        
      <table style="background-color: #AD1457;">

          <tr style="background-color:#AD1457; padding-right: 20px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <th style="padding:20px 30px 30px 30px; font-size:23px; color:white;">Doctor Name</th>
            <th style="padding:20px 30px 30px 30px; font-size:23px; color:white;">Date</th>
            <th style="padding:20px 30px 30px 30px; font-size:23px; color:white;"> Message </th>
            <th style="padding:20px 30px 30px 30px; font-size:23px; color:white;">Status</th>
            <th style="padding:20px 30px 30px 30px; font-size:23px; color:white;">Cancel Appointment</th>

          </tr>

          @foreach($appoint as $appoints)

          <tr style="background-color:black;" align="center">
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->doctor}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->date}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->message}}</td>
            <td style="padding:10px; font-size:20px; color:white;">{{$appoints->status}}</td>
            
            <td><a class="btn" onclick="return confirm('are you sure to cancel this')" href="{{url('cancel_appoint',$appoints->id)}}" style="color: white; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 18; background-color:red;">Cancel</a></td>

          </tr>



          @endforeach
   
      </table>
   
   </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>