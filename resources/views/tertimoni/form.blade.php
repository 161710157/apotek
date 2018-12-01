<!-- Modal Create -->
<div class="modal fade" id="modal-create-testimoni" role="dialog" aria-labelledby="CreateTestimoni" aria-hidden="true">
	<div class="modal-dialog" role="document" >
		<div class="modal-content">
			<form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="modal-header">
					<h5 class="modal-title" id="CreateTestimoni">
						Tambah Testimoni
					</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">

						<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
							<label class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control"  required>
							@if ($errors->has('nama'))
							<span class="help-block">
								<strong>{{ $errors->first('nama') }}</strong>
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


						<div class="form-group {{ $errors->has('testimoni') ? ' has-error' : '' }}">
							<label class="control-label">Testimoni</label>
							<input type="text" name="testimoni" class="form-control"  required>
							@if ($errors->has('testimoni'))
							<span class="help-block">
								<strong>{{ $errors->first('testimoni') }}</strong>
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

