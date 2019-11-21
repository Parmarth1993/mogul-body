@extends('layouts.header-signup')
@section('content')
<section class="quiz_page-wrapper">
   <section class="quiz_secion">
      <div class="container">
         <div class="inner-quiz-sec">
            <div class="quiz-header-sec">
               <h2>MogulBody Quiz</h2>
               <div class="quiz-arrows">
                  <a class="carousel-control-prev" href="#quiZ" data-slide="prev"><span class="carousel-control-prev-icon"><i class="fas fa-arrow-left"></i></span></a>
                  <a class="carousel-control-next arrow-active" href="#quiZ" data-slide="next"><span class="carousel-control-next-icon"><i class="fas fa-arrow-right"></i></span></a>
               </div>
            </div>
            <div class="alert alert-danger alert-dismissible" id="errorMessage">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                <strong>Error!</strong> <span id="message"></span>
            </div>
            <div class="quiz-content-wrappper">
               <div id="quiZ" class="carousel slide">
                  {!! Form::open(['url' => route('physicianSignupQuiz'), 'class' => 'quiz-form']) !!}
                     {{ csrf_field() }}
                     <input type="hidden" name="quizType" id="quizType" value="physician">
                     <div class="validation-message text-center"><p>Please fill required fields.</p></div>
                     <div class="carousel-inner">
                        <div class="carousel-item active" data-id="1">
                           <div class="quiz-box">
                              <div class="age_section">
                                 <div class="Header-quiz">
                                    <h2>Qualification</h2>
                                 </div>
                                 <div class="doctor_name">
                                    <input type="text" name="qualification" placeholder="Qualification" required>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item" data-id="2">
                           <div class="quiz-box">
                              <div class="age_section">
                                 <div class="Header-quiz">
                                    <h2>How long have you been a Physician?</h2>
                                 </div>
                                 <div class="doctor_name">
                                    <input type="text" name="service_time" placeholder="How long have you been a Physician?" required>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item" data-id="3">
                           <div class="quiz-box">
                              <div class="age_section">
                                 <div class="Header-quiz">
                                    <h2>What's the name of your business?</h2>
                                 </div>
                                 <div class="doctor_name">
                                    <input type="text" name="business_name" placeholder="What's the name of your business?" required>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item" data-id="4">
                           <div class="quiz-box">
                              <div class="age_section">
                                 <div class="Header-quiz">
                                    <h2>Who are the typical patients you work with?</h2>
                                 </div>
                                 <div class="doctor_name">
                                    <select name="typical_patients" class="form-control" required>
                                       <option value="">Select</option>
                                       <option value="Test">Test</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item" data-id="5">
                           <div class="quiz-box last-fill-form-main">
                              <div class="last-fill-form">
                                 <div class="Header-quiz">
                                    <h2>Fill out a form</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>First Name</label>
                                          <input type="text" name="first_name" placeholder="Your first name" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>Last Name</label>
                                          <input type="text" name="last_name" placeholder="Your last name" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>Email</label>
                                          <input type="email" name="email" placeholder="Your email" required>
                                          <input type="hidden" name="password" value="Admin123#">
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>Phone</label>
                                          <input type="text" name="phone" placeholder="Your Phone" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="submit-Form fill-form">
                                          <input type="submit" class="submit-form" value="Get Results" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="quiz-content-indicators">
                        <ul class="carousel-indicators">
                           <li data-target="#quiZ" data-slide-to="0" class="active"></li>
                           <li data-target="#quiZ" data-slide-to="1"></li>
                           <li data-target="#quiZ" data-slide-to="2"></li>
                           <li data-target="#quiZ" data-slide-to="3"></li>
                           <li data-target="#quiZ" data-slide-to="4"></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
@endsection