@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Tambah Data Obat
					<div class="panel-title pull-right">
						<a href="{{ route('obat.index') }}">Kembali</a>
					</div>
				</div>

				<div class="panel-body">
					<form action="{{ route('obat.store') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
							<label class="control-label">Kategori</label>
							<select name="kategori_id" class="form-control">
								@foreach($kategoris as $data)
								<option value="{{$data->id}}">{{$data->kategori}}</option>
								@endforeach
							</select>
							@if ($errors->has('kategori_id'))
							<span class="help-block">
								<strong>{{ $errors->first('kategori_id') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('nama_obat') ? ' has-error' : '' }}">
							<label class="control-label">Nama Obat</label>
							<input type="text" name="nama_obta" class="form-control"  required>
							@if ($errors->has('nama_obat'))
							<span class="help-block">
								<strong>{{ $errors->first('nama_obat') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
							<label class="control-label">Harga</label>
							<input type="text" name="harga" class="form-control"  required>
							@if ($errors->has('harga'))
							<span class="help-block">
								<strong>{{ $errors->first('harga') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
							<label class="control-label">Gambar</label>
							<input type="file" name="gambar" class="form-control" accept="img/*" required>
							@if ($errors->has('gambar'))
							<span class="help-block">
								<strong>{{ $errors->first('gambar') }}</strong>
							</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
							<label class="control-label">Deskripsi</label>
							<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required></textarea>
							@if ($errors->has('deskripsi'))
							<span class="help-block">
								<strong>{{ $errors->first('deskripsi') }}</strong>
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