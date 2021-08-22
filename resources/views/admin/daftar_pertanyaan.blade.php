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
            <h1 align="center">DAFTAR PERTANYAAN</h1>
            <br><br>
            <table class="table table-bordered border-dark mt-2">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Penanya</th>
                  <th scope="col">Pertanyaan</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Jawaban Anda</th>
                  <th scope="col">Aksi</th>
                </tr>    
              </thead>

              <tbody>
                @foreach ($dataTanya as $p)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $p['nama'] }}</td>
                  <td>{{ $p['pertanyaan'] }}</td>
                  <td><img src="storage/<?php echo $p['gambar']; ?>" class="card-img-top" alt="..."style="width:200px; height:100px;"></td>
                  <td>{{ $p['jawaban'] }}</td>
                  <td>
                    <center>
                      <a href="{{url('/daftar_pertanyaan/'.$p['id'])}}"class="btn btn-warning mt-1">Jawab</a> 
                      <a href="{{url('/daftar_pertanyaan/delete/'.$p['id'])}}"class="btn btn-danger mt-1"onclick="return confirm('Yakin Ingin Menghapus data ini ?')">Delete</a>
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

