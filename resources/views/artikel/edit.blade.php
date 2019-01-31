@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="col-md-12">
			<div class="card card-info">
			  <div class="card-header">
			  	<center> <h3 class="card-title">Edit Data Artikel</h3></center>
			  	<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('artikel.index')}}"> Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('artikel.update',$artikels->id) }}" method="post"  enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikels->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Gambar</label>
                                @if (isset($artikels) && $artikels->gambar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/img/artikel/'.$artikels->gambar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="gambar" type="file" value="{{ $artikels->gambar }}">
                            </div>
			  		
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor"required>{{ $artikels->deskripsi}}
			  			</textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kategoriartikels_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kategori Artikel</label>	
			  			<select name="kategoriartikels_id" class="form-control">
			  				@foreach($kategoriartikels as $data)
			  				<option value="{{ $data->id }}" {{ $selectedkategoriartikel == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategoriartikels_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategoriartikels_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
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