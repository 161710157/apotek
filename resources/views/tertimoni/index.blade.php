@extends('layouts.admin')
@section('content')
@include('testimoni.form')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Testimoni
					<div class="panel-title  right"><a id="modal-create" href="#modal-create-testimoni" role="button" class="btn" data-toggle="modal">Tambah Obat</a>
				</div>
			</div>
			  	<div class="panel-body">
			  		<div class="table-responsive">
			  			<table class="table">
			  				<thead>
			  					<tr>
			  						<th>No</th>
			  						<th>Nama </th>
									<th>Gambar</th>
									<th>Testimoni</th>
									<th>Slug</th>
									<th colspan="3">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomor = 1; ?>
						  		@php $no = 1; @endphp
						  		@foreach($testimonis as $data)
						  		<tr>
						  			<td>{{ $no++ }}</td>
									<td><p> {{ $data->nama }} </p></td>
									<td><img src="{{ asset('/assets/img/testimoni/'.$data->gambar.'')}}" width="70" height="70"></td>
								
									<td><p> {{ $data->testimoni }} </p></td>
									<td><p> {{ $data->slug }} </p></td>
									<td>
										<a id="modal-edit" class="btn btn-primary" href="{{ route('testimoni.edit',$data->id) }}" role="button" data-toggle="modal">Edit Data</a>
								</td>
								<td>
									<form method="post" action="{{ route('testimoni.destroy',$data->id) }}">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
									 <button type="submit" class="btn btn-round btn-danger"><a href="" class="fa fa-trash"></a>Hapus Data</button>

							</form>
								</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection