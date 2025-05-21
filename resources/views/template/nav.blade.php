<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 4.5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>RMB | Car Rental</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-transparan" id="mainNav">
        <a class="navbar-brand" href="#page-top">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNkxYBeT1k3yq8jAmv94b-XSnwppL2Driwrw&usqp=CAU" width="90" height="60" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <a class="navbar-brand font-weight-bold text-white" href="#page-top">RMB</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if (auth()->user()->level=="admin" || auth()->user()->level=="user" || auth()->user()->level== "owner")
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cars">HOME</a>
                    </li>
                @endif
                @if (auth()->user()->level=="admin" || auth()->user()->level== "owner")
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/carsadmin">ADMINISTRASI CARS</a>
                    </li>
                @endif
                @if (auth()->user()->level=="admin" ||  auth()->user()->level== "owner" || auth()->user()->level=="user")
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/activity">ACTIVITY</a>
                    </li>
                @endif
                @if (auth()->user()->level=="admin")
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/activityadmin">ADMINISTRASI ACTIVITY</a>
                    </li>
                @endif
                @if (auth()->user()->level=="admin" || auth()->user()->level=="user" || auth()->user()->level== "owner")
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/about">ABOUT US</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <!-- end navbar -->


    <!-- jumbotron -->      
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">{{$title}}</h1><br> 
            <span class="font-weight-bold">RENTAL MOBIL BOJONEGORO</span></h1>
            <p>Nikmati Perjalanan Anda Dengan Pelayanan Mobil Terbaik Kami, Tersedia Berbagai Armada Terbaru,<br>
            Transmisi Manual & Matic, Surat Kendaraan Lengkap & Tanpa Khawatir Mogok</p>
            <!-- logout -->
            <a class="btn btn-primary btn-lg" href="{{route('logout')}}" role="button">Logout</a>
            <!-- end logout -->
        </div>
    </div>
    <!-- end jumbotron -->

    <div class="maincontent">
        @yield('maincontent')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script src="/js/app.js"></script>
    <!-- Main JS -->
  </body>
</html>