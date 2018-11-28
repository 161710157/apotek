<!-- Modal Create -->
<div class="modal fade" id="modal-create-obat" role="dialog" aria-labelledby="CreateObat" aria-hidden="true">
	<div class="modal-dialog" role="document" >
		<div class="modal-content">
			<form action="{{ route('obat.store') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="modal-header">
					<h5 class="modal-title" id="CreateObat">
						Tambah Barang
					</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">

						<div class="form-group {{ $errors->has('nama_obat') ? ' has-error' : '' }}">
							<label class="control-label">Nama Obat</label>
							<input type="text" name="nama_obat" class="form-control"  required>
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
							<label class="control-label">gambar</label>
							<input type="file" name="gambar" class="form-control" accept="img/*" required>
							@if ($errors->has('gambar'))
							<span class="help-block">
								<strong>{{ $errors->first('gambar') }}</strong>
							</span>
							@endif
						</div>


						<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
							<label class="control-label">deskripsi</label>
							<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required></textarea>
							@if ($errors->has('deskripsi'))
							<span class="help-block">
								<strong>{{ $errors->first('deskripsi') }}</strong>
							</span>
							@endif
						</div>

			<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kategori as $data)
			  				<option value="{{ $data->id }}">{{ $data->kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>
	
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
						Save
					</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Close
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>

