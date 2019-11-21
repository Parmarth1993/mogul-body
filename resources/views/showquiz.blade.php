@extends('layouts.header-quizshow')
@section('content')
<div class="home-banner-sec" style="background-image: url(images/banner.png);">
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
                  <img src="images/mogul-video.png">
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
                        <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        </label>
                        <span>Monthly</span>
                     </div>
                     <div class="toggle-swich-btm-cntnt">
                        <h4><del>$59/mo</del>></h4>
                        <h2>$25/mo</h2>
                        <a class="btn-design" href="#">GET STARTED TODAY</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="pricing-testimonial_sec">
                     <div class="pricing-testimonial-img">
                        <img src="images/doctor.png">
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
   <div class="alert alert-success" id="message">
      Thank you for your registration. Below are your quiz details.
   </div>
   <br />
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
                  <img src="images/started.png">
                  <div class="getting-started-cntnt-wrapper-inner">
                     <h2>getting started</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 align-self-end">
               <div class="getting_started-form">
                  <form>
                     <div class="form-grouph">
                        <label>First Name</label>
                        <input class="input-design" type="text" name="" placeholder="Your first name">
                     </div>
                     <div class="form-grouph">
                        <label>Card Number</label>
                        <input class="input-design" type="text" name="" placeholder="----">
                     </div>
                     <div class="form-grouph">
                        <label>Last Name</label>
                        <input class="input-design" type="text" name="" placeholder="Your last name">
                     </div>
                     <div class="form-grouph">
                        <label>Expiration</label>
                        <input class="input-design" type="date">
                     </div>
                     <div class="form-grouph">
                        <label>Email Address</label>
                        <input class="input-design" type="text" name="" placeholder="Your email address">
                     </div>
                     <div class="form-grouph">
                        <label>CVC</label>
                        <input class="input-design" type="text" name="" placeholder="----">
                     </div>
                     <div class="form-grouph">
                        <input class="input-submit-design btn-design" type="submit" name="" value="Get Started Today">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
@endsection