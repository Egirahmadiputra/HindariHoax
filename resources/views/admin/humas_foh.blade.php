@extends('layouts.app')

@section('content')
<section class="content-header">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <h1>
    Hindari Hoax
    <small>Polda Riau Present</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-files-o"></i>Data Berita Hoax</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <br>
          <div class="table-responsive">
            <h1 align="center">DAFTAR BERITA HOAX</h1>
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/humas_foh/create')}}"class="btn btn-primary mt-2">Tambah Data</a>
            <br><br>
            <table class="table table-bordered border-dark mt-2">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul Hoax</th>
                  <th scope="col">Detail Hoax</th>
                  <th scope="col">Gambar Hoax</th>
                  <th scope="col">Judul Fakta</th>
                  <th scope="col">Detail Fakta</th>
                  <th scope="col">Gambar Fakta</th>
                  <th scope="col">Bukti</th>
                  <th scope="col">Aksi</th>
                </tr>    
              </thead>

              <tbody>
                @foreach ($dataHoax as $p)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $p['judul_hoax'] }}</td>
                  <td>{{ $p['detail_hoax'] }}</td>
                  <td>{{ $p['gambar_hoax'] }}</td>
                  <td>{{ $p['judul_fakta'] }}</td>
                  <td>{{ $p['detail_fakta'] }}</td>
                  <td>{{ $p['gambar_fakta'] }}</td>
                  <td>{{ $p['bukti'] }}</td>
                  <td>
                    <center>
                      <a href="{{url('/humas_foh/'.$p['id'])}}"class="btn btn-warning mt-1">Edit</a> 
                      <a href="{{url('/humas_foh/delete/'.$p['id'])}}"class="btn btn-danger mt-1"onclick="return confirm('Yakin Ingin Menghapus data ini ?')">Delete</a>
                    </center>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

