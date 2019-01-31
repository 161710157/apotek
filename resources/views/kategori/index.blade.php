@extends('layouts.admin')
@section('content')
@include('kategori.form')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Kategori
					<div class="panel-title right"><a id="modal-create" href="#modal-create-kategori" role="button" class="btn" data-toggle="modal">Tambah Kategori</a>
				</div>
			</div>


 <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
           
    
			<div class="panel-body">
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			  		@include('sweet::alert')
			  	
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori</th>
								<th colspan="3">Action</th>
							</tr>	
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($kategoris as $data)
							<tr>
								<td> {{ $no++ }} </td>
								<td> {{ $data->kategori }} </td>
								<td>
									<a id="modal-edit" class="btn btn-warning" href="{{ route('kategori.edit',$data->id) }}" role="button" data-toggle="modal">Edit</a>
								</td>
								<td>
									<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
										<input name="_token" type="hidden" value="{{ csrf_token() }}">
										<input type="hidden" name="_method" value="DELETE">
									 <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger"><a href="" ></a>Delete</button>
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