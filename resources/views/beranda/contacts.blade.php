<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hindari Hoax</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <a  href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline" style="text-decoration:none"></a>
                @else
                <a href="{{ route('login') }}" style="text-decoration:none"></a>
                @endauth
              </div>
            @endif</li>
          </ul>
        </nav>
      </div>

      <br><br><br><br>

      <div>
        <section class="service">
          <div class="container">

            <div class="card mb-3">
              <div class="card-body">
                <div class="container1">
                  <h3>Kontak Polda Riau</h3>
                  <div class="box1">
                    <div class="col-3">
                      <h4>Address</h4>
                      <p>Jl. Pattimura No.13 Pekanbaru</p>
                    </div>
                    <div class="col-3">
                      <h4>Situs Web</h4>
                      <p>riau.polri.go.id</p>
                    </div>
                    <div class="col-3">
                      <h4>Telp.</h4>
                      <p>0761-31307</p>
                    </div>
                  </div>                                
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="container1"><br><br>
                  <h3>Kontak Humas Polda Riau</h3>
                  <div class="box1">
                    <div class="col-3">
                      <h4>Address</h4>
                      <p>Jl. Pattimura No.13 Pekanbaru</p>
                    </div>
                    <div class="col-3">
                      <h4>Email</h4>
                      <p>Bidhumas.riau@polri.go.id</p>
                    </div>
                    <div class="col-3">
                      <h4>FP</h4>
                      <p>HUMASPOLDARIAU</p>
                    </div>
                    <div class="col-4">
                      <h4>Website</h4>
                      <p>tribratanewsriau.com</p>
                    </div>
                    <div class="col-3">
                      <h4>Instagram</h4>
                      <p>@humaspolda_riau</p>
                    </div>
                    <div class="col-3">
                      <h4>Youtube</h4>
                      <p>BID HUMAS POLDA RIAU</p>
                    </div>
                    <div class="col-3">
                      <h4>Twitter</h4>
                      <p>@humaspoldariau</p>
                    </div>
                  </div>                                
                </div>
              </div>
            </section>
          </div>

          <footer>
            <div class="container">
              <small>Copyright &copy; 2021 Polda Riau</small>
            </div>
          </footer>

        </div>
      </body>
      </html>
