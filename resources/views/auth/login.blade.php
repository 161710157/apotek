@extends('layouts.login')
@section('content')
<div class="limiter">
        <div class="container-login100" style="background-image: url('images/img.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                <form class="login100-form validate-form">
                    <div class="login100-form-avatar">
                        <img src="/assets/login/images/4.png" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        LOGIN
                    </span>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                                <input id="password" type="password" class="input100" name="password" placeholder="Password" required>
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>                    
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
