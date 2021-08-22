@extends('layouts.app')


@section('content')
<section class="content-header">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <h1>
    Hindari Hoax
    <small>Polda Riau Present</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-files-o"></i>Laporan Masyarakat</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box ">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <br>
          <div class="table-responsive">
            <h1 align="center">DAFTAR LAPORAN MASYARAKAT</h1>
            <br>
            <table class="table table-bordered border-dark mt-2">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Pelapor</th>
                  <th scope="col">Email Pelapor</th>
                  <th scope="col">Judul Laporan</th>
                  <th scope="col">Detail Laporan</th>
                  <th scope="col">Gambar 1</th>
                  <th scope="col">Gambar 2</th>
                  <th scope="col">Aksi</th>
                </tr>    
              </thead>

              <tbody>
                @foreach ($laporanHoax as $p)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $p['nama_pelapor'] }}</td>
                  <td>{{ $p['email_pelapor'] }}</td>
                  <td>{{ $p['judul_laporan'] }}</td>
                  <td>{{ $p['detail_laporan'] }}</td>
                  <td><img src="storage/<?php echo $p['gambar1']; ?>" class="card-img-top" alt="..."style="width:200px; height:100px;"></td>
                  <td><img src="storage/<?php echo $p['gambar2']; ?>" class="card-img-top" alt="..."style="width:200px; height:100px;"></td></td>
                  <td>
                    <center>
                      <a href="{{url('/laporanHoax/delete/'.$p['id'])}}"class="btn btn-danger mt-1"onclick="return confirm('Yakin Ingin Menghapus data ini ?')">Delete</a>
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

