@include('email.layouts.header')

<div>
    Hi, <br />
    Admin <br />
    A new <b> {{ $type }} </b> has been registered on the website, below are the details: <br />
    First Name : <b>{{ $firstname }}</b><br />
    Last Name : <b>{{ $lastname }}</b><br />
    Email : <b>{{ $email }}</b><br />
    @if($type != 'patient')
    	Phone : <b>{{ $phone }}</b><br />
    @endif
    <b>Below are the details for the quiz:</b> <br />
    @if($type == 'patient')
    	Gender : <b>{{ $gender }}</b><br />
    	Age : <b>{{ $teens }}</b><br />
    	Diagnosis : <b>{{ $diagnosis }}</b><br />
    	Diagnosis Conditions : <b>{{ $diagonsis_condition }}</b><br />
    	How active are you? : <b>{{ $active }}</b><br />
    	What describes you? : <b>{{ $describe }}</b><br />
    	What’s your body type? : <b>{{ $body_type }}</b><br />
    	Did your doctor refer you? : <b>{{ $doctor }}</b><br />
    	@if($doctor == 'yes')
    		Doctor Name : <b>{{ $doctor_name }}</b><br />
    	@endif
    @else
    	Qualification : <b>{{ $qualification }}</b><br />
    	How long have you been a Physician? : <b>{{ $service_time }}</b><br />
    	What's the name of your business? : <b>{{ $business_name }}</b><br />
    	Who are the typical patients you work with? : <b>{{ $typical_patients }}</b><br />
    @endif
</div>

@include('email.layouts.footer')