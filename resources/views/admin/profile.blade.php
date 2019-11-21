@extends('layouts.admin.header')
@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>My Profile</h2>
                        {!! Form::open(['url' => route('updateprofile'), 'class' => 'update-profile']) !!}
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
                          </div>
                          <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" disabled>
                          </div>
                          <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                </div><br />
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <br />  <h2>Change Password</h2>
                        {!! Form::open(['url' => route('updatepassword'), 'class' => 'update-password']) !!}
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label for="pwd">Old Password:</label>
                            <input name="password" type="password" class="form-control" id="password">
                          </div>
                          <div class="form-group">
                            <label for="pwd">New Password:</label>
                            <input name="new_password" type="password" class="form-control" id="new_password">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Confirm Password:</label>
                            <input name="confirm_password"  type="password" class="form-control" id="confirm_password">
                          </div>
                          <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>2019 <a href="http://mogulbody.smallbizplace.com">MOGULBODY</a> LLC Privacy Policy Terms and Conditions Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection