@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Edit Data Obat
					<div class="panel-title pull-right">
						<a href="{{ route('obat.index') }}">Kembali</a>
					</div>
				</div>
				<div class="panel-body">
					<form action="{{ route('obat.update',$obats->id) }}" method="post" enctype="multipart/form-data" >
						<input name="_method" type="hidden" value="PATCH">
						{{ csrf_field() }}

						<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
							<label class="control-label">Kategori</label>
							<select name="kategori_id" class="form-control">
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
							<input type="text" name="harga" class="form-control" value="{{ $obats->harga }}"  required>
							@if ($errors->has('harga'))
							<span class="help-block">
								<strong>{{ $errors->first('harga') }}</strong>
							</span>
							@endif
						</div>


                      <div class="form-group {{$errors->has('gambar') ? 'has-error' : '' }}">
				<label class="control-label">Gambar</label>
				<input type="file" id="gambar" name="gambar" class="validate" accept="image/*" required>
				@if ($errors->has('gambar'))
				<span class="help-block"><strong>{{ $errors->first('gambar') }}</strong></span>
				@endif
			</div>
                         
						<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
							<label class="control-label">Deskripsi</label>
							<input type="text" name="deskripsi" class="form-control"  required>
							@if ($errors->has('deskripsi'))
							<span class="help-block">
								<strong>{{ $errors->first('deskripsi') }}</strong>
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