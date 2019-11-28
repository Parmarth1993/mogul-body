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
                  <li class="active"><a href="javascript:void();"><i class="fa fa-pencil" aria-hidden="true"></i> Update PLan</a></li>
               </ul>
               <div id="myTabContent" class="tab-content custom-product-edit">
                  <div class="product-tab-list tab-pane fade active in" id="update_profile">
                     {!! Form::open(['url' => route('editPlan', $plan->id), 'class' => 'update-plan']) !!}
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="nickname">Plan Name:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $plan->nickname}}" required>
                              </div>
                              <label for="currency">Currency:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <input type="text" class="form-control" id="currency" name="currency" value="{{ $plan->currency }}" readonly>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="interval">Interval:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <input type="text"  class="form-control" id="interval" name="interval" value="{{ $plan->interval }}" required readonly>
                              </div>
                           </div>
                           <div class="review-content-section">
                              <label for="product">Product:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <select class="form-control" id="product" name="product" required readonly>
                                 @foreach($products->data as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="amount">Amount:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <input type="text"  class="form-control" id="price" name="price" value="{{ $plan->amount}}" required readonly>
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