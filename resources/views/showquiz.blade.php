@extends('layouts.header-quizshow')
@section('content')
<div class="home-banner-sec" style="background-image: url({{ asset('images/banner.png') }}">
   <div class="container">
      <div class="home-banner-sec-cntnt">
         <h4>MY MOGUL BODY life style Plan</h4>
         <h2>Program Title</h2>
         <p>To Lose Stubborn Body Fat & Increase Muscle Tone</p>
      </div>
   </div>
</div>
</div>
<section class="main-inner-content">
   <section class="maghul_body-video-wrapper">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center">
               <div class="maghul-body-vdio-wrapper">
                  <img src="{{ asset('images/mogul-video.png') }}">
                  <span class="icon-play-vdio" data-toggle="modal" data-target="#mogul-body-popup"><i class="fas fa-play"></i></span>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-center">
               <div class="maghul-body-vdio-cntnt">
                  <h2>My Mogul Body <br>Video Title</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="mogul_body-pricing-sec">
      <div class="container">
         <div class="mogul_body-pricing-sec-inner">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="pricing_toggle-switch">
                     <div class="toggle-swithch-label">
                        <span>Annual</span>
                        <label class="switch" >
                        <input type="checkbox" name="price" id="price" value="monthly">
                        <span class="slider round"></span>
                        </label>
                        <span>Monthly</span>
                     </div>
                     <div class="toggle-swich-btm-cntnt">
                        <h4><del>$59/mo</del>></h4>
                        <h2 id="priceHead">$300/yr</h2>
                        <a class="btn-design" href="#" id="btn-design">GET STARTED TODAY</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="pricing-testimonial_sec">
                     <div class="pricing-testimonial-img">
                        <img src="{{ asset('images/doctor.png') }}">
                     </div>
                     <h2> 30% Off!</h2>
                     <h3>Dr. Referral Special Limited-Time</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @if(Session::has('success'))
   <div class="alert alert-success" id="message">
     {{ Session::get('success') }}
   </div>
   <br />
   @else
   <div class="alert alert-success" id="message">
     {{ Session::has('success') }}
      Thank you for your registration. Below are your quiz details.
   </div>
   <br />
   @endif
   <section class="queue-section-wrapper" id="sectionquiz">
      <div class="container">
         <div class="queue-section-wrapper-inner">
            <h2>Quiz</h2>
            @if($quiz_details->type == 'patient')
              <div class="Queue-accordians-sec">
                 <div id="accordion">
                    <div class="card">
                       <div class="card-header">
                          <a class="card-link" data-toggle="collapse" href="#collapseOne">
                          Gender
                          </a>
                       </div>
                       <div id="collapseOne" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->gender }}</p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                          Age
                          </a>
                       </div>
                       <div id="collapseTwo" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->teens }}</p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                          Diagnosis
                          </a>
                       </div>
                       <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->diagnosis }} </p>
                             <br />
                             <p><strong>Diagnosis Condition:</strong>&nbsp; {{ $quiz_details->diagonsis_condition }} </p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                          How active are you?
                          </a>
                       </div>
                       <div id="collapseFour" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->active }}</p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                          What describes you?
                          </a>
                       </div>
                       <div id="collapseFive" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->describe }} </p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                          What’s your body type?
                          </a>
                       </div>
                       <div id="collapseSix" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->body_type }}</p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                          Did your doctor refer you?
                          </a>
                       </div>
                       <div id="collapseSeven" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->doctor }}</p>
                             <br />
                             <p>Doctor Name: {{ $quiz_details->doctor_name }} </p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            @else
              <div class="Queue-accordians-sec">
                <div id="accordion">
                    <div class="card">
                       <div class="card-header">
                          <a class="card-link" data-toggle="collapse" href="#collapseOne">
                          Qualification
                          </a>
                       </div>
                       <div id="collapseOne" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->qualification }}</p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                          How long have you been a Physician?
                          </a>
                       </div>
                       <div id="collapseTwo" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->service_time }}</p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                          What's the name of your business?
                          </a>
                       </div>
                       <div id="collapseThree" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->business_name }} </p>
                          </div>
                       </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                          Who are the typical patients you work with?
                          </a>
                       </div>
                       <div id="collapseFour" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                             <p>{{ $quiz_details->typical_patients }}</p>
                          </div>
                       </div>
                    </div>
                </div>
              </div>
            @endif

         </div>
      </div>
   </section>
   <section class="get-started-sec">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="getting-started-cntnt-wrapper">
                  <img src="{{ asset('images/started.png') }}">
                  <div class="getting-started-cntnt-wrapper-inner">
                     <h2>getting started</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-end">
               <div class="getting_started-form">
                  <form id="payment-form" action="{{ route('stripePayment') }}" method="POST"  data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"  class="require-validation">
                    {{ csrf_field() }}
                     <div class="form-grouph">
                        <label>First Name</label>
                        <input class="input-design" type="text" name="first_name" placeholder="Your first name" value="{{ $quiz_details->first_name }}" required>
                     </div>
                     <div class="form-grouph">
                        <label>Last Name</label>
                        <input class="input-design" type="text" name="last_name" placeholder="Your last name" value="{{ $quiz_details->last_name }}" required>
                     </div>
                     <div class="form-grouph">
                        <label>Email Address</label>
                        <input class="input-design" type="text" name="email" placeholder="Your email address" value="{{ $quiz_details->email }}" required>
                     </div>
                     <div class="form-grouph">
                        <label>Password</label>
                        <input class="input-design" type="password" name="password" placeholder="Your password" value="" required>
                     </div>
                     <div class="form-grouph">
                        <label>Card Number</label>
                        <input class="input-design card-number" type="text" name="card_numder" placeholder="4242424242424242" required>
                     </div>
                     
                     <div class="form-grouph">
                        <label>Expiration Month</label>
                        <input name="expiry_month" class="input-design card-expiry-month" type="text" placeholder="MM" size='2' required>
                     </div>
                     <div class="form-grouph">
                        <label>Expiration Year</label>
                        <input name="expiry_year" class="input-design card-expiry-year" type="text" placeholder='YY' size='2'>
                     </div>
                     <div class="form-grouph">
                        <label>CVC</label>
                        <input name="card_security" class="input-design card-cvc" type="text" name="" placeholder="123" required>
                     </div>
                     <div class="form-grouph">
                        <input type="hidden" name="user_id" value="{{  $quiz_details->user_id }}" />
                        <input type="hidden" name="quiz_id" value="{{  $quiz_details->quiz_id }}" />
                        <input type="hidden" class="plan_type" name="plan_type" value="yearly" />
                        <input id="stripe_price" type="hidden" name="stripe_price" value="300" />
                        <input class="input-submit-design btn-design" type="submit" name="" value="Get Started Today" >
                     </div>
                      <div class="form-grouph">
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                      </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            // $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripe_token' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
$('#price').change(function(){
    if($('.mogul_body-pricing-sec input:checked').val() === 'monthly') {
      $('#stripe_price').val(25);
      $('#priceHead').html('$25/mo');
      $('.plan_type').val('Monthly');
    } else {
      $('#stripe_price').val(300);
      $('#priceHead').html('$300/yr');
      $('.plan_type').val('Annual');
    }
});
</script>
@endsection