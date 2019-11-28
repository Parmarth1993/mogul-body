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
                  <li class="active"><a href="javascript:void();"><i class="fa fa-pencil" aria-hidden="true"></i> Create PLan</a></li>
               </ul>
               <div id="myTabContent" class="tab-content custom-product-edit">
                  <div class="product-tab-list tab-pane fade active in" id="update_profile">
                     {!! Form::open(['url' => route('createPlan'), 'class' => 'create-plan']) !!}
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="nickname">Plan Name:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <input type="text" class="form-control" id="nickname" name="nickname" value="" required>
                              </div>
                              <label for="currency">Currency:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <select class="form-control" id="currency" name="currency" >
                                 <option value="USD" selected="selected">United States Dollars</option>
                                <option value="EUR">Euro</option>
                                <option value="GBP">United Kingdom Pounds</option>
                                <option value="DZD">Algeria Dinars</option>
                                <option value="ARP">Argentina Pesos</option>
                                <option value="AUD">Australia Dollars</option>
                                <option value="ATS">Austria Schillings</option>
                                <option value="BSD">Bahamas Dollars</option>
                                <option value="BBD">Barbados Dollars</option>
                                <option value="BEF">Belgium Francs</option>
                                <option value="BMD">Bermuda Dollars</option>
                                <option value="BRR">Brazil Real</option>
                                <option value="BGL">Bulgaria Lev</option>
                                <option value="CAD">Canada Dollars</option>
                                <option value="CLP">Chile Pesos</option>
                                <option value="CNY">China Yuan Renmimbi</option>
                                <option value="CYP">Cyprus Pounds</option>
                                <option value="CSK">Czech Republic Koruna</option>
                                <option value="DKK">Denmark Kroner</option>
                                <option value="NLG">Dutch Guilders</option>
                                <option value="XCD">Eastern Caribbean Dollars</option>
                                <option value="EGP">Egypt Pounds</option>
                                <option value="FJD">Fiji Dollars</option>
                                <option value="FIM">Finland Markka</option>
                                <option value="FRF">France Francs</option>
                                <option value="DEM">Germany Deutsche Marks</option>
                                <option value="XAU">Gold Ounces</option>
                                <option value="GRD">Greece Drachmas</option>
                                <option value="HKD">Hong Kong Dollars</option>
                                <option value="HUF">Hungary Forint</option>
                                <option value="ISK">Iceland Krona</option>
                                <option value="INR">India Rupees</option>
                                <option value="IDR">Indonesia Rupiah</option>
                                <option value="IEP">Ireland Punt</option>
                                <option value="ILS">Israel New Shekels</option>
                                <option value="ITL">Italy Lira</option>
                                <option value="JMD">Jamaica Dollars</option>
                                <option value="JPY">Japan Yen</option>
                                <option value="JOD">Jordan Dinar</option>
                                <option value="KRW">Korea (South) Won</option>
                                <option value="LBP">Lebanon Pounds</option>
                                <option value="LUF">Luxembourg Francs</option>
                                <option value="MYR">Malaysia Ringgit</option>
                                <option value="MXP">Mexico Pesos</option>
                                <option value="NLG">Netherlands Guilders</option>
                                <option value="NZD">New Zealand Dollars</option>
                                <option value="NOK">Norway Kroner</option>
                                <option value="PKR">Pakistan Rupees</option>
                                <option value="XPD">Palladium Ounces</option>
                                <option value="PHP">Philippines Pesos</option>
                                <option value="XPT">Platinum Ounces</option>
                                <option value="PLZ">Poland Zloty</option>
                                <option value="PTE">Portugal Escudo</option>
                                <option value="ROL">Romania Leu</option>
                                <option value="RUR">Russia Rubles</option>
                                <option value="SAR">Saudi Arabia Riyal</option>
                                <option value="XAG">Silver Ounces</option>
                                <option value="SGD">Singapore Dollars</option>
                                <option value="SKK">Slovakia Koruna</option>
                                <option value="ZAR">South Africa Rand</option>
                                <option value="KRW">South Korea Won</option>
                                <option value="ESP">Spain Pesetas</option>
                                <option value="XDR">Special Drawing Right (IMF)</option>
                                <option value="SDD">Sudan Dinar</option>
                                <option value="SEK">Sweden Krona</option>
                                <option value="CHF">Switzerland Francs</option>
                                <option value="TWD">Taiwan Dollars</option>
                                <option value="THB">Thailand Baht</option>
                                <option value="TTD">Trinidad and Tobago Dollars</option>
                                <option value="TRL">Turkey Lira</option>
                                <option value="VEB">Venezuela Bolivar</option>
                                <option value="ZMK">Zambia Kwacha</option>
                                <option value="EUR">Euro</option>
                                <option value="XCD">Eastern Caribbean Dollars</option>
                                <option value="XDR">Special Drawing Right (IMF)</option>
                                <option value="XAG">Silver Ounces</option>
                                <option value="XAU">Gold Ounces</option>
                                <option value="XPD">Palladium Ounces</option>
                                <option value="XPT">Platinum Ounces</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="review-content-section">
                              <label for="interval">Interval:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <select  class="form-control" id="interval" name="interval" required>
                                    <option value="day">Daily</option>
                                    <option value="week">Weekly</option>
                                    <option value="month">Monthly</option>
                                    <option value="quarter">Every 3 months</option>
                                    <option value="semiannual">Every 6 months</option>
                                    <option value="year">Yearly</option>
                                 </select>
                              </div>
                           </div>
                           <div class="review-content-section">
                              <label for="product">Product:</label>
                              <div class="input-group mg-b-pro-edt">
                                 <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                 <select class="form-control" id="product" name="product" required>
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
                                 <input type="text"  class="form-control" id="price" name="price" value="" required>
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