@extends('layouts.admin')
@section('content')
<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h3>Show Obat</h3>
            	<br>
          </div>
          <div class="widget-content nopadding">
          	<form id="form-wizard" class="form-vertical">
          		
        			<div class="control-group">
			  			<label class="control-label"><h5>Nama Obat : {{ $obats->nama_obat}}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
                          <label class="control-label"><h5>Harga : <td>Rp.{{ number_format($obats->harga,2,',','.')}}</td><h5>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Gambar : <img src=" {{ asset ('/assets/img/fotoobat/' .$obats->gambar. '' ) }}" width="100" height="100"></label>	</h5>
			  		</div>

			  	
			  		<div class="control-group">
			  			<label class="control-label"><h5>Kategori : {{ $obats->kategoris->kategori}}</h5></label>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Deskripsi:<br><br> {!! $obats->deskripsi !!}<h5></label>
                         
			  		</div>	
			  	</div>
			  		<div class="panel-title pull-right"><a href="{{ url()->previous() }}" class="btn btn-danger"><i class="icon-remove">Back</i></a></div>
			  	</label>
			  </div>
			
		</form>
	</div>
</div>
</div>
</div>
</div>

@endsection