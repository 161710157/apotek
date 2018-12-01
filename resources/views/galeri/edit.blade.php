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

						 <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Gambar</label>
                                @if (isset($galeris) && $galeris->gambar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/img/fotogalery/'.$galeris->gambar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="gambar" type="file" value="{{ $galeris->gambar }}">
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