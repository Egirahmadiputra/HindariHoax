

@extends('layouts.app')


@section('content')
<section class="content-header">
	<h1>
		Hindari Hoax
		<small>Polda Riau Present</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-files-o"></i>Edit Berita</a></li>
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
						<form method="POST"action="{{url('humas_foh/'.$humas_foh['id'])}}" enctype="multipart/form-data">
							@method('put')
							@csrf
							<input type="hidden" name="id" id="id" value="{{$humas_foh['id']}}">
							<div class="form-group">
								<label for="judul_hoax">Judul Hoax</label>
								<input type="text" class="form-control @error('judul_hoax') is-invalid @enderror" id="judul_hoax" name="judul_hoax" placeholder="Berita Hoax"value="{{$humas_foh['judul_hoax']}}">
								@error('judul_hoax')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>

							<div class="form-group">
								<label for="detail_hoax">Detail Hoax</label>
								<textarea type="text" class="form-control @error('detail_hoax') is-invalid @enderror" id="detail_hoax" name="detail_hoax" placeholder="Detail Berita Hoax"rows="6"><?php echo $humas_foh['detail_hoax']?></textarea>
								@error('detail_hoax')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>

							<div class="form-group">
								<label for="judul_fakta">Fakta Sebenarnya</label>
								<input type="text" class="form-control @error('judul_fakta') is-invalid @enderror" id="judul_fakta" name="judul_fakta" placeholder="Fakta Berita"value="{{$humas_foh['judul_fakta']}}">
								@error('judul_fakta')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>

							<div class="form-group">
								<label for="detail_fakta">Detail Fakta</label>
								<textarea type="text" class="form-control @error('detail_fakta') is-invalid @enderror" id="detail_fakta" name="detail_fakta" placeholder="Detail Fakta Berita"rows="5"><?php echo $humas_foh['detail_fakta']?></textarea>
								@error('detail_hoax')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<br>

							<div class="form-group">
								<label for="bukti">Bukti Berita</label>
								<textarea type="text" class="form-control @error('bukti') is-invalid @enderror" id="bukti" name="bukti" placeholder="Bukti Berita"rows="5"><?php echo $humas_foh['bukti']?></textarea>
								@error('bukti')
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
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
