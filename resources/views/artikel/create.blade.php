@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="col-12">
	<div class="col-md-12">
	<div class="card card-info">
		<div class="card-header">
			<center><b>Tambah Artikel </b></center>
		<div class="card-title pull-right"><a href="{{ route('artikel.index') }}">Kembali</a>
		</div>
	</div>
	<div class="card-body">
		<form action="{{ route('artikel.store') }}" method="post"  enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('judul') ? 'has-error' : '' }}">
				<label class="control-label">Judul</label>
				<input type="text"  name="judul" class="form-control" required>
				@if ($errors->has('judul'))
				<span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('gambar') ? 'has-error' : '' }}">
				<label class="control-label">Gambar</label>
				<input type="file" id="gambar" name="gambar" class="validate" accept="image/*" required>
				@if ($errors->has('gambar'))
				<span class="help-block"><strong>{{ $errors->first('gambar') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('deskripsi') ? 'has-error' : '' }}">
				<label class="control-label">Deskripsi</label>
				<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor"required>
			  			</textarea>
				@if ($errors->has('deskripsi'))
				<span class="help-block"><strong>{{ $errors->first('deskripsi') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{ $errors->has('kategoriartikels_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Artikel</label>	
			  			<select name="kategoriartikels_id" class="form-control">
			  				<option>Pilih Kategori Artikel</option>
			  				@foreach($kategoriartikels as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategoriartikels_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoriartikels_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			<div class="from-group">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>

		</form>
	</div>
</div>
</div>
</div>
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
  };
  CKEDITOR.replace( 'text',options);
</script>
</div>
@endsection

