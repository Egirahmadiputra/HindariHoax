@extends('layouts.app')


@section('content')
<section class="content-header">
  <h1>
    Hindari Hoax
    <small>Polda Riau Present</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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
            <table class="table table-bordered border-dark">
              <tr>
                <td rowspan="9" align="center"width="200"><img src="{{('images/Riau.png')}}" width="200" height="200"></td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Nama</th>
                <td align="center">:</td>
                <td>Kepolisian Daerah Riau</td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Singkatan</th>
                <td align="center">:</td>
                <td>Polda Riau</td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Lembaga Induk</th>
                <td align="center">:</td>
                <td>Kepolisian Republik Indonesia</td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Wilayah</th>
                <td align="center">:</td>
                <td>Provinsi Riau</td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Markas Besar</th>
                <td align="center">:</td>
                <td>Jl. Pattimura Pekanbaru</td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Hari Bhayangkara</th>
                <td align="center">:</td>
                <td>1 Juli 1946</td>
              </tr>
              <tr>
                <th width="200"align="left">&nbsp;Umur Bhayangkara</th>
                <td align="center">:</td>
                <td><?php $lahir = new DateTime('01-07-1946');
                $today = new DateTime('today');
                $umur = $today->diff($lahir); 
                echo $umur->y; echo " Tahun";?>
              </td>
              <tr>
                <th width="200"align="left">&nbsp;Situs Web</th>
                <td align="center">:</td>
                <td>riau.polri.go.id</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
@endsection