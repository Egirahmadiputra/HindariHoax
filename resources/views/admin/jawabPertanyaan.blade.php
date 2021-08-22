

@extends('layouts.app')


@section('content')
<section class="content-header">
	<h1>
		Hindari Hoax
		<small>Polda Riau Present</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-files-o"></i>Jawab Pertanyaan</a></li>
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
					<div class="container mt-2">
						<form method="POST"action="{{url('daftar_pertanyaan/'.$daftar_pertanyaan['id'])}}" enctype="multipart/form-data">
							@method('put')
							@csrf
							<input type="hidden" name="id" id="id" value="{{$daftar_pertanyaan['id']}}">
							<div class="form-group">
								<label for="nama">Nama Penanya</label>
								<input disabled="" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Berita Hoax"value="{{$daftar_pertanyaan['nama']}}">
								@error('nama')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>
							<div class="form-group">
								<label for="pertanyaan">Pertanyaan</label>
								<textarea disabled="" type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" name="pertanyaan" placeholder="Detail Berita Hoax"rows="6"><?php echo $daftar_pertanyaan['pertanyaan']?></textarea>
								@error('pertanyaan')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>

							<div class="form-group">
								<label for="jawaban">Jawaban</label>
								<textarea type="text" class="form-control @error('jawaban') is-invalid @enderror" id="jawaban" name="jawaban" placeholder="Berita Hoax"value="{{$daftar_pertanyaan['jawaban']}}"rows="6"><?php echo $daftar_pertanyaan['jawaban']?></textarea>
								@error('jawaban')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>
							<button class="btn btn-primary mt-3"type="submit">Simpan Data</button>
							<br><br><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
