@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <center><div class="card-heading"><h1>Hallo Admin</h1></div></center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <center><h3>Selamat Datang Di Apoteker</h3></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
