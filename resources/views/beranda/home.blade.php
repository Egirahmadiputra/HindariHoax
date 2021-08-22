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
      <div class="tblmenubox">
        <div class="togel tblmenu">

        </div>
      </div>
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
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
          $(".togel.tblmenu").click(function () {
            $(".menu").toggleClass("sh");
          });
        </script>
      </div>

      <br><br>
      <aside class="sidebar">

        <div class="widget">
          <h2>Sosial Media</h2>
          <li><font size="3"><a href="https://www.instagram.com/humaspolda_riau/"style="text-decoration:none">Instagram</a></font></li>
          <li><font size="3"><a href="https://www.youtube.com/channel/UCFJxStZliBiJqZVgOrSvVaA"style="text-decoration:none">Youtube</a></font></li>
          <li><font size="3"><a href="https://web.facebook.com/BidHumasPoldaRiau"style="text-decoration:none">Facebook</a></font></li>
        </div>

        <div class="widget">
          <h2>Tentang</h2>
          <p>Situs ini merupakan situs yang akan membahas seputar fakta dan hoax dari sebuah berita yang tersebar di masyarakat</p>
        </div>
      </aside>

      <div>
        <section class="service">
          <div class="container">
            <div class="box">
              <div class="col-md-9 col-sm-8 mb-2">

                <br><br>

                <div class="row row-cols-2 row-cols-md-2 g-4">
                 @foreach ($dataHoax as $d)
                 <div class="col">
                  <div class="card">
                    <h2>HOAX</h2>
                    <img src="storage/<?php echo $d['gambar_hoax']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $d['judul_hoax']; ?></h5>
                      <p class="card-text"><?php echo $d['detail_hoax']; ?>.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <h2>FAKTA</h2>
                    <img src="storage/<?php echo $d['gambar_fakta']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $d['judul_fakta']; ?></h5>
                      <p class="card-text"><?php echo $d['detail_fakta']; ?></p>
                      <p class="card-text"><b>Baca Selengkapnya di : </b><?php echo $d['bukti']; ?></p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <br>
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
