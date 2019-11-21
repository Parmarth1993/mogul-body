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
                  <li class="active"><a href="#update_profile"><i class="fa fa-eye" aria-hidden="true"></i> View Quiz</a></li>
               </ul>
               <div id="myTabContent" class="tab-content custom-product-edit">
                  <div class="product-tab-list tab-pane fade active in" id="update_profile">
                  	<div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="last_name">First Name:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->first_name}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Last Name:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->last_name}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="last_name">Email:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->email}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Phone:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->phone}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    @if($quiz->type == 'patient')
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="last_name">Gender:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->gender}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Age:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->teens}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="last_name">Diagnosis:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->diagnosis}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Diagonsis Condition:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->diagonsis_condition}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="last_name">How active are you?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->active}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">What describes you?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->describe}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">What’s your body type?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->body_type}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Did your doctor refer you?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->doctor}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        @if($quiz->doctor == 'yes')
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Doctor’s name:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->doctor_name}}</p>
                              </div>
                           </div>
                        </div>
                        @endif
                    </div>
                    @else
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Qualification:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->qualification}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">How long have you been a Physician?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->service_time}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">What's the name of your business?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->business_name}}</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="email">Who are the typical patients you work with?:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <p>{{$quiz->typical_patients}}</p>
                              </div>
                           </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                              <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10" onclick="return window.history.back();">Back
                              </button>
                           </div>
                        </div>
                    </div>
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