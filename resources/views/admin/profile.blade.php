@extends('layouts.admin.header')
@section('content')
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @if(session()->get('success'))
                      <div class="alert alert-success">
                        {{ session()->get('success') }}  
                      </div>
                    @endif
                    @if(session()->get('error'))
                      <div class="alert alert-danger">
                        {{ session()->get('error') }}  
                      </div>
                    @endif

                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#update_profile"><i class="fa fa-pencil" aria-hidden="true"></i> Update Profile</a></li>
                                    <li><a href="#update_pass"><i class="fa fa-pencil" aria-hidden="true"></i> Change Password</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="update_profile">
                                         {!! Form::open(['url' => route('updateprofile'), 'class' => 'update-profile']) !!}
                                            {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                     <label for="first_name">First Name:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
                                                    </div>
                                                    <label for="last_name">Last Name:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                         <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="email">Email:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                    <div class="product-tab-list tab-pane fade" id="update_pass">
                                         {!! Form::open(['url' => route('updatepassword'), 'class' => 'update-password']) !!}
                                            {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="new_password">New Password:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                          <input name="new_password" type="password" class="form-control" id="new_password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="confirm_password">Confirm Password:</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input name="confirm_password"  type="password" class="form-control" id="confirm_password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
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