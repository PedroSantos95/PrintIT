@extends('layouts.header')

@yield('content')
<br><br><br>

<div>
	Thanks for creating an account with the verification demo app.
	Please follow the link below to verify your email address
	{{ URL::to('register/verify/' . $confirmation_code) }}.<br/>

</div>


<br><br>
@extends('layouts.footer')