@extends('layouts.auth.header')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE LOGIN TO APP</h3>
                    <p>This is the best app ever!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('login') }}" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
                                @if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
                                <span class="help-block small">Your unique email to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                @if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" name="remember" id="customCheck" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>
@endsection
