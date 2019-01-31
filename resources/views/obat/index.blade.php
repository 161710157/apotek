@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="col-md-12">
			<div class="card card-info">
				<div class="card-header">
			<center><h3>Data Obat</h3></center>
			 <div class="card-title pull-right">			 
			<a href="{{ route('obat.create') }}">Tambah<i class="fa fa-plus"></i>
			  	</a>
			  	</div>
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<div class="card-body">
			  	@include('sweet::alert')
			  	<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borederless table-striped table-earning" id="myTable">
				  	<thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Nama</th>
			  		  <th>Harga</th>
			  		  <th>Gambar</th>
			  		  <th>Kategori</th>
			  		  <th>Deskripsi</th>
							<th>Status</th>
					
					
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($obats as $data)
				  	  <tr>
				  	  <td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_obat}}</td>
				    	<td>Rp.{{ number_format($data->harga,2,',','.')}}</td>
				    	 <td><p><a href="" class="thumbnail">
								<img src=" {{ asset ('/assets/img/fotoobat/' .$data->gambar. '' ) }}" width="100" height="100"></p></td></a>
				    	<td>{{ $data->kategoris->kategori }}</td>
				    	<td>{!!str_limit($data->deskripsi,200)!!}</td>
							<td>
									@role('admin')
									@if($data->status == 1)
											<form action="{{ route('obat.publish',$data->id) }}" method="post">
															 {{ csrf_field() }}
											<button class="btn btn-success">Aktif</button>
											</form>
									@elseif($data->publish == 0)
											<form action="{{ route('obat.publish',$data->id) }}" method="post">
															 {{ csrf_field() }}
											<button type="submit" class="btn btn-info">Non Aktif</button>
											</form>
									@endif
									@endrole
									@role('admin')
									@if($data->status == 1)
											
									@elseif($data->publish == 0)
											
									@endif
									@endrole
							</td>
						<td>
							<a class="btn btn-warning" href="{{ route('obat.edit',$data->id) }}">Edit</a>
						</td>
						<td>
								<a class="btn btn-info" href="{{ route('obat.show',$data->id) }}">Show</a>
							</td>
						<td>
							<form method="post" action="{{ route('obat.destroy',$data->id) }}">
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

	    