<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hindari Hoax</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
  <div class="body">
    <section class="jbhhcom">
      <h2>HindariHoax.com</h2>
    </section>

    <div class="wrap">
      <nav class="menu">
        <ul>
          <li><a href="{{ url('/') }}"target="" style="text-decoration:none">Beranda</a></li>
          <li><a href="{{ url('/laporan') }}"target="" style="text-decoration:none">Lapor Hoax</a></li>
          <li><a href="{{ url('/pertanyaan') }}"target="" style="text-decoration:none">Tanya Hoax</a></li>
          <li><a href="{{ url('/contacts') }}"target="" style="text-decoration:none">Kontak</a></li>
          <li>@if (Route::has('login'))
            <div class="menu1">
              <div class="top-right links">
                @auth
                <a  href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline" style="text-decoration:none">Dashboard</a>
                @else
                <a href="{{ route('login') }}" style="text-decoration:none">Login</a>
                @endauth
              </div>
            @endif</li>
          </ul>
        </nav>
      </div>


      <section class="service">
        <div class="container"><br><br>

          <a href="{{url('/pertanyaan/create')}}"class="btn btn-primary mt-2">Ajukan Pertanyaan</a><br><br>
           @foreach ($dataTanya as $d)
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $d['nama']; ?></h5>
                  <p class="card-text"><?php echo $d['pertanyaan']; ?></p>
                  <td><img src="storage/<?php echo $d['gambar']; ?>" class="card-img-top" alt="..."style="width:200px; height:100px;"></td>
                  <p ><b>===Jawabannya===</b></p>
                  <p class="card-text"><?php echo $d['jawaban']; ?></p>
                </div>
              </div>
           @endforeach   
          </div>
        </section>

        <footer>
          <div class="container">
            <small>Copyright &copy; 2021 Polda Riau</small>
          </div>
        </footer>

      </div>
    </body>
    </html>
