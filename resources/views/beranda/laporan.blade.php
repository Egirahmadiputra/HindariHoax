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

      <section class="service">
        <div class="container1"><br><br>
          <h3>Laporkan Hoax</h3>
          <div class="box">
            <div class="py-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <br>
                  <div class="container mt-2">
                    <form method="POST"action="{{url('laporanHoax/')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="nama_pelapor">Nama</label>
                        <input type="text" class="form-control @error('nama_pelapor') is-invalid @enderror" id="nama_pelapor" name="nama_pelapor" placeholder="Berita Hoax">
                        @error('nama_pelapor')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="email_pelapor">Email</label>
                        <input type="text" class="form-control @error('email_pelapor') is-invalid @enderror" id="email_pelapor" name="email_pelapor" placeholder="Detail Berita Hoax">
                        @error('email_pelapor')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="judul_laporan">Judul Laporan Hoax</label>
                        <input type="text" class="form-control @error('judul_laporan') is-invalid @enderror" id="judul_laporan" name="judul_laporan" placeholder="Fakta Berita">
                        @error('judul_laporan')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="detail_laporan">Detail Laporan</label>
                        <textarea type="text" class="form-control @error('detail_laporan') is-invalid @enderror" id="detail_laporan" name="detail_laporan" placeholder="Detail Fakta Berita"rows="5"></textarea>
                        @error('detail_laporan')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="gambar1">Screenshoot</label>
                        <input type="file" class="form-control" id="gambar1" name="gambar1">
                      </div>
                      <br>

                      <div class="form-group">
                        <label for="gambar2">Screenshoot</label>
                        <input type="file" class="form-control" id="gambar2" name="gambar2">
                      </div>
                      <br>
                      
                      <button class="btn btn-primary mt-3"type="submit" value="upload">Simpan Data</button><br><br>
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
