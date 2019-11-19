@extends('layouts.header-quiz')
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

            <div class="quiz-content-wrappper">
               <div id="quiZ" class="carousel slide">
                  {!! Form::open(['url' => '/home/saveQuiz', 'class' => 'sales-dashbard-form']) !!}
                            {{ csrf_field() }}
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="quiz-box">
                              <div class="gender-sec quiz-innEr">
                                 <h4>Gender</h4>
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/male.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span><i class="fas fa-mars"></i> Male</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="gender" value="male"> 
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/female.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span><i class="fas fa-venus"></i> Female</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="gender" value="female"> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box">
                              <div class="age_section">
                                 <div class="Header-quiz">
                                    <h2>Age</h2>
                                 </div>
                                 <div class="age-radio-wrappers">
                                    <div class="radio_wrapper-age">
                                       <div class="cstm-radio">
                                          <input type="radio" name="teens" value="teens">
                                          <span class="cstm-cirle"></span>
                                          <h4>Teens</h4>
                                       </div>
                                    </div>
                                    <div class="radio_wrapper-age">
                                       <div class="cstm-radio">
                                          <input type="radio" name="teens" value="20's">
                                          <span class="cstm-cirle"></span>
                                          <h4>20's</h4>
                                       </div>
                                    </div>
                                    <div class="radio_wrapper-age">
                                       <div class="cstm-radio">
                                          <input type="radio" name="teens" value="30's">
                                          <span class="cstm-cirle"></span>
                                          <h4>30's</h4>
                                       </div>
                                    </div>
                                    <div class="radio_wrapper-age">
                                       <div class="cstm-radio">
                                          <input type="radio" name="teens" value="40's">
                                          <span class="cstm-cirle"></span>
                                          <h4>40's</h4>
                                       </div>
                                    </div>
                                    <div class="radio_wrapper-age">
                                       <div class="cstm-radio">
                                          <input type="radio" name="teens" value="50's">
                                          <span class="cstm-cirle"></span>
                                          <h4>50's</h4>
                                       </div>
                                    </div>
                                    <div class="radio_wrapper-age">
                                       <div class="cstm-radio">
                                          <input type="radio" name="teens" value="60's">
                                          <span class="cstm-cirle"></span>
                                          <h4>60's</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box diagonsis_section-main">
                              <div class="diagonsis_section">
                                 <div class="Header-quiz">
                                    <h2>Diagnosis</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="dignosis-radio-wrapper">
                                          <div class="dignosis-radio-wrapper-inner">
                                             <div class="cstm-radio">
                                                <input type="radio" name="diagnosis" value="My health is not where it needs to be and if I don’t improve my eating and begin an exercise routine, my life may be at risk.">
                                                <span class="cstm-cirle"></span>
                                                <p>My health is not where it needs to be and if I don’t improve my eating and begin an exercise routine,
                                                   my life may be at risk.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="dignosis-radio-wrapper-inner">
                                             <div class="cstm-radio">
                                                <input type="radio" name="diagnosis" value="I need to lose weight loss because it is affecting my health, well being, and life goals" checked="checked">
                                                <span class="cstm-cirle"></span>
                                                <p>I need to lose weight loss because it is affecting my health, well being, and life goals</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="dignosis-checkboxes-sec">
                                          <h5>Please select all conditions that apply to you: </h5>
                                          <div class="checkboXes-grey-box">
                                             <div class="checkbox-selection">
                                                <input type="checkbox" name="diagonsis_condition[]" value="High blood pressure"> 
                                                <span class="cstm-chckbox"></span>
                                                <span class="cstm-chckbox-tittle">High blood pressure</span>
                                             </div>
                                             <div class="checkbox-selection">
                                                <input type="checkbox" name="diagonsis_condition[]" value="Low blood pressure"> 
                                                <span class="cstm-chckbox"></span>
                                                <span class="cstm-chckbox-tittle">Low blood pressure
                                                </span>
                                             </div>
                                             <div class="checkbox-selection">
                                                <input type="checkbox" name="diagonsis_condition[]" value="Diabetes">
                                                <span class="cstm-chckbox"></span>
                                                <span class="cstm-chckbox-tittle">Diabetes</span>
                                             </div>
                                             <div class="checkbox-selection">
                                                <input type="checkbox" name="diagonsis_condition[]" value="Asthma">
                                                <span class="cstm-chckbox"></span>
                                                <span class="cstm-chckbox-tittle">Asthma</span>
                                             </div>
                                             <div class="checkbox-selection">
                                                <input type="checkbox" name="diagonsis_condition[]" value="Arthritis"> 
                                                <span class="cstm-chckbox"></span>
                                                <span class="cstm-chckbox-tittle">Arthritis</span>
                                             </div>
                                             <div class="checkbox-selection">
                                                <input type="checkbox" name="diagonsis_condition[]" value="Thyroid"> 
                                                <span class="cstm-chckbox"></span>
                                                <span class="cstm-chckbox-tittle">Thyroid</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box">
                              <div class="how-active-are">
                                 <div class="Header-quiz">
                                    <h2>How active are you?</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/lightly-active.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span>Lightly Active</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="active" value="lightly active">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/moderate-active.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span>Moderately Active</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="active" value="moderate active">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/very-active.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span>Very Active</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="active" value="very active">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box what-described-you">
                              <div class="what-described-you-inner">
                                 <div class="Header-quiz">
                                    <h2>What describes you?</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/nutriation.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span>I’ve been trying nutrition plans and workout routines before and it didn’t work for me</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="describe" value="I’ve been trying nutrition plans and workout routines before and it didn’t work for me">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/gym.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span>I’ll begin workout and nutrition plans but have a hard time staying consistent with them to get the best results</span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="describe" value="I’ll begin workout and nutrition plans but have a hard time staying consistent with them to get the best results">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/gym-guide.png">
                                             </div>
                                             <div class="Sel-cntnt-block">
                                                <span>I have a hard time beginning anything new and sticking with it. I need someone to help me stick with it. </span>
                                             </div>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="describe" value="I have a hard time beginning anything new and sticking with it. I need someone to help me stick with it.">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box">
                              <div class="what-body_type">
                                 <div class="Header-quiz">
                                    <h2>What’s your body type?</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/endomorph.png">
                                             </div>
                                          </div>
                                          <div class="Sel-cntnt-block">
                                             <span>Endomorph</span>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="body_type" value="Endomorph">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/Ectomorph.png">
                                             </div>
                                          </div>
                                          <div class="Sel-cntnt-block">
                                             <span>Ectomorph</span>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="body_type" value="Ectomorph">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                       <div class="Selection-wrapper">
                                          <div class="Sel-box">
                                             <div class="Sel-image">
                                                <img src="images/Mesomorph.png">
                                             </div>
                                          </div>
                                          <div class="Sel-cntnt-block">
                                             <span>Mesomorph</span>
                                          </div>
                                          <div class="select-radio">
                                             <input type="radio" name="body_type" value="Mesomorph">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box doctor_refrence">
                              <div class="doctor_refrence-inner">
                                 <div class="Header-quiz">
                                    <h2>Did your doctor refer you?</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="cstm-radio">
                                          <input type="radio" name="doctor" value="yes">
                                          <span class="cstm-cirle"></span>
                                          <p>Yes</p>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="cstm-radio">
                                          <input type="radio" name="doctor" value="no">
                                          <span class="cstm-cirle"></span>
                                          <p>No</p>
                                       </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                       <div class="doctor_name">
                                          <label>Doctor’s name</label>
                                          <input type="text" name="doctor_name" placeholder="Name of Dr.">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="quiz-box last-fill-form-main">
                              <div class="last-fill-form">
                                 <div class="Header-quiz">
                                    <h2>Fill out a form</h2>
                                 </div>
                                 <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>First Name</label>
                                          <input type="text" name="first_name" placeholder="Your first name">
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>Last Name</label>
                                          <input type="text" name="last_name" placeholder="Your last name">
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="doctor_name fill-form">
                                          <label>Email</label>
                                          <input type="email" name="email" placeholder="Your email">
                                          <input type="hidden" name="password" value="123456">
                                       </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                       <div class="submit-Form fill-form">
                                          <input type="submit" value="Get Results">
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
                           <li data-target="#quiZ" data-slide-to="5"></li>
                           <li data-target="#quiZ" data-slide-to="6"></li>
                           <li data-target="#quiZ" data-slide-to="7"></li>
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