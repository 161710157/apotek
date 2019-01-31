<!-- Modal Create -->
<div class="modal fade" id="modal-create-galeri" role="dialog" aria-labelledby="CreateGaleri" aria-hidden="true">
	<div class="modal-dialog" role="document" >
		<div class="modal-content">
			<form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="modal-header">
					<h5 class="modal-title" id="CreateGaleri">
						Tambah Galeri
					</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
				 <div class="form-group {{$errors->has('gambar') ? 'has-error' : '' }}">
				<label class="control-label">Gambar</label>
				<input type="file" id="gambar" name="gambar" class="validate" accept="image/*" required>
				@if ($errors->has('gambar'))
				<span class="help-block"><strong>{{ $errors->first('gambar') }}</strong></span>
				@endif
			</div>
				</div>
			<div class="modal-body">
				<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
					<label class="control-label">judul</label>
					<input type="text" name="judul" class="form-control"  required>
					@if ($errors->has('judul'))
					<span class="help-block">
						<strong>{{ $errors->first('judul') }}</strong>
					</span>
					@endif
				</div>
			</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
						Save
					</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						Close
					</button>
				</div>
			</form>
		</div>
	</div>
</div>