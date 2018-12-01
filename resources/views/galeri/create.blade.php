@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Tambah
					<div class="panel-title pull-right">
						<a href="{{ route('galeri.index') }}">Kembali</a>
					</div>
				</div>
				<div class="panel-body">
					<form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
                        
                       <div class="form-group {{$errors->has('gambar') ? 'has-error' : '' }}">
				<label class="control-label">Gambar</label>
				<input type="file" id="gambar" name="gambar" class="validate" accept="image/*" required>
				@if ($errors->has('gambar'))
				<span class="help-block"><strong>{{ $errors->first('gambar') }}</strong></span>
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