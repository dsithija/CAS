@extends('layouts.cas')

@section('content')
	<div class="container header">
        <h1 style="float: left;">Welcome to CAS</h1>
    </div>

    <div class="p-a-30">
    	<p>Your account management system.</p>

    	@if (Auth::guest())
	    	<a class="btn btn-primary text-uppercase" href="{{ url('login') }}" role="button">Login</a>
	    	<a class="btn btn-primary text-uppercase" href="{{ url('register') }}" role="button">Sign Up</a>
    	@else
    		<a class="btn btn-primary" href="{{ url('home') }}" role="button">Go to Home</a>
    	@endif
    </div>

@stop