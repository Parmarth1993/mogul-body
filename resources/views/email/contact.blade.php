@include('email.layouts.header')

<div>
    Hi, <br />
    {{ $firstname }} {{ $lastname }}<br />
    Welcome to <b>Mogul Body</b>, your account has been created succesfully. You can find your login details below, click the login button to access you account.
    <br />

    Email : <b>{{ $email }}</b><br />
    Password : <b>{{ $password }}</b><br />
    <a href="{{ $login }}" target="_blank">Click to Login</a>
    <br />
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
    	Phone : <b>{{ $phone }}</b><br />
    	Qualification : <b>{{ $qualification }}</b><br />
    	How long have you been a Physician? : <b>{{ $service_time }}</b><br />
    	What's the name of your business? : <b>{{ $business_name }}</b><br />
    	Who are the typical patients you work with? : <b>{{ $typical_patients }}</b><br />
    @endif
</div>

@include('email.layouts.footer')