<!-- Modal Create -->
<div class="modal fade" id="modal-create-kategori" role="dialog" aria-labelledby="CreateKategori" aria-hidden="true">
	<div class="modal-dialog" role="document" >
		<div class="modal-content">
			<form action="{{ route('kategori.store') }}" method="post">
				{{ csrf_field() }}
				<div class="modal-header">
					<h5 class="modal-title" id="CreateKategori">
						Tambah Kategori
					</h5>
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group {{ $errors->has('kategori') ? ' has-error' : '' }}">
						<label class="control-label">Kategori</label>
						<input type="text" name="kategori" class="form-control"  required>
						@if ($errors->has('kategori'))
						<span class="help-block">
							<strong>{{ $errors->first('kategori') }}</strong>
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