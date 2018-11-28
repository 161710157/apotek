@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Edit Data Galeri
					<div class="panel-title pull-right">
						<a href="{{ route('galeri.index') }}">Kembali</a>
					</div>
				</div>
				<div class="panel-body">
					<form action="{{ route('galeri.update',$galeris->id) }}" method="post" enctype="multipart/form-data" >
						<input name="_method" type="hidden" value="PATCH">

						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
							<label class="control-label">Gambar</label>
							<input type="file" name="gambar" class="form-control" accept="img/*" value="{{ $galeris->gambar }}"  required>
							@if ($errors->has('gambar'))
							<span class="help-block">
								<strong>{{ $errors->first('gambar') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
							<label class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{ $galeris->nama }}"  required>
							@if ($errors->has('nama'))
							<span class="help-block">
								<strong>{{ $errors->first('nama') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection