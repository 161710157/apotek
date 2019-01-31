@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="col-md-12">
			<div class="card card-info">
			  <div class="card-header">
			  	<center> <h3 class="card-title">Edit Data kategori</h3></center>
			  	<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('kategoriartikel.index')}}"> Kembali</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('kategoriartikel.update',$kategoriartikels->id) }}" method="post"  enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('nama_kategori') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kategori</label>	
			  			<input type="text" name="nama_kategori" class="form-control" value="{{ $kategoriartikels->nama_kategori }}"  required>
			  			@if ($errors->has('nama_kategori'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kategori') }}</strong>
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
</div>
@endsection