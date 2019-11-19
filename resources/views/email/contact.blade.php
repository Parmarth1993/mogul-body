@include('email.layouts.header')

<div>
    First Name : {{ $firstname }}<br />
    Last Name : {{ $lastname }}<br />
    Email : {{ $email }}<br />
    Password : {{ $password }}<br />
</div>

@include('email.layouts.footer')