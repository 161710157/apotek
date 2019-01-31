@extends('layouts.admin')
@section('content')
@include('galeri.form')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Galeri
					<div class="panel-title right"><a id="modal-create" href="#modal-create-galeri" role="button" class="btn" data-toggle="modal">Tambah Galeri</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Judul</th>
								<th colspan="3">Action</th>
							</tr>	
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($galeris as $data)
							<tr>
								<td> {{ $no++ }} </td>
								
								<td><img src="{{ asset('/assets/img/fotogalery/'.$data->gambar.'')}}" width="70" height="70"></td>
								<td>{{ $data->judul}}</td>
								<td>
							          <a class="btn btn-warning" href="{{ route('galeri.edit',$data->id) }}">Edit</a>
								</td>
							
						          <td>
									<form method="post" action="{{ route('galeri.destroy',$data->id) }}">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
									<input type="hidden" name="_method" value="DELETE">
										<button onclick="return konfirmasi()"type="submit" class="btn btn-danger">Delete</button>
								<script>
									function konfirmasi(){
										tanya = confirm("Yakin ingin menghapus data?");
										if(tanya == true) return true;
										else return false;
									}
								</script>
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