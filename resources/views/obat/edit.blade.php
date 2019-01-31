@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-11">
			<div class="panel panel-primary">
				<div class="card card-primary">
					<div class="card-header">
			 <center> <h3 class="card-title">Edit Data Obat</h3></center>
						<a class="fa fa-arrow-circle-left card-title pull-right" href="{{route('obat.index')}}"> Kembali</a>
					</div>
				</div>
			
			  <div class="panel-body">
			  	<form action="{{ route('obat.update',$obats->id) }}" method="post"  enctype="multipart/form-data" >
			  		
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		        

			  		<div class="form-group {{ $errors->has('nama_obat') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Obat</label>	
			  			<input type="text" name="nama_obat" class="form-control" value="{{ $obats->nama_obat }}"  required>
			  			@if ($errors->has('nama_obat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_obat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
					<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="number" name="harga" class="form-control" value="{{ $obats->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>


			  		<div class="form-group ">
                                <label for="cc-payment" class="control-label mb-1">Gambar</label>
                                @if (isset($obats) && $obats->gambar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('/assets/img/fotoobat/'.$obats->gambar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="gambar" type="file" value="{{ $obats->gambar }}">
                            </div>
                    

			  		<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
							<label class="control-label">Kategori</label>
							<select name="kategori_id" class="form-control">
								<option>Pilih Kategori</option>
								@foreach($kategori as $data)
								<option value="{{$data->id}}" {{$selectedKategori == $data->id ? 'selected="selected"' : '' }}>{{ $data->kategori}}</option>
								@endforeach
							</select>
							@if ($errors->has('kategori_id'))
							<span class="help-block">
								<strong>{{ $errors->first('kategori_id') }}</strong>
							</span>
							@endif
						</div>


			  			<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor"required> {{ $obats->deskripsi}}
			  			</textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
					  <div class="card-footer bg-light">
						<button type="submit" class="btn btn-success">Simpan</button>
				
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