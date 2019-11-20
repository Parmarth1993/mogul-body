@extends('layouts.auth.header')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE LOGIN TO MOGUL BODY</h3>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('register') }}" method="POST" id="loginForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-lg-6">
                                    <label>First Name</label>
                                    <input class="form-control" name="first_name">
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-lg-6">
                                    <label>Last Name</label>
                                    <input class="form-control" name="last_name">
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }} col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                    @if ($errors->has('confirm_password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('confirm_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-6">
                                    <label>Email Address</label>
                                    <input class="form-control" type="email" name="email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email_repeat') ? ' has-error' : '' }} col-lg-6">
                                    <label>Repeat Email Address</label>
                                    <input class="form-control" type="email" name="email_repeat">
                                    @if ($errors->has('email_repeat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email_repeat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="checkbox col-lg-12">
                                    <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2018 <a href="http://mogulbody.smallbizplace.com">Mogul Body</a> All rights reserved.</p>
            </div>
        </div>
    </div>
@endsection
