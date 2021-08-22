<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hindari Hoax</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
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

      <section class="service">
        <div class="container1"><br><br>
          <h3>Tanyakan Sebuah Berita</h3>
          <div class="box">
            <div class="py-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <br>
                  <div class="container mt-2">
                    <form method="POST"action="{{url('/pertanyaan')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Anda">
                        @error('nama_pelapor')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <textarea type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" name="pertanyaan" placeholder="Pertanyaan Anda"rows="5"></textarea>
                        @error('pertanyaan')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="gambar">Masukkan Gambar Jika di Perlukan</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                      </div>
                      
                      <button class="btn btn-primary mt-3"type="submit" value="upload">Tanyakan</button><br><br>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>                               
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
