@extends('layouts.cas')

@section('content')
	<div class="container header">
        <h1 style="float: left;">Login to CAS</h1>
    </div>

    @if (count($errors))
        <div class="errors p-a-30">
            <div class="alert alert-danger" role="alert">
              <strong>Oops!</strong> Something is not right with your submission. Please check the form for more details.
            </div>
        </div>
    @elseif (session()->exists('error'))
        <div class="errors p-a-30">
            <div class="alert alert-danger" role="alert">
              <strong>Oh snap!</strong> {{ Session::get('error') }}
            </div>
        </div>
    @endif

	<div class="col-md-3"></div>
    <div class="col-md-6 p-a-30">
	    <form method="POST" action="{{ url('login') }}">
    	   {{ csrf_field() }}

    		<div class="form-group row{{ $errors->has('email') ? " has-danger" : "" }}">
        		<label class="col-sm-4" for="email">E-Mail Address</label>
        		<div class="col-sm-8">
        			<input  class="form-control{{ $errors->has('email') ? " form-control-danger" : "" }}" type="email" name="email" value="{{ old('email') }}" required>
                    @include('errors', ['field' => 'email'])
        		</div>
        	</div>
        	<div class="form-group row{{ $errors->has('password') ? " has-danger" : "" }}">
        		<label class="col-sm-4" for="password">Password</label>
        		<div class="col-sm-8">
        			<input  class="form-control{{ $errors->has('password') ? " form-control-danger" : "" }}" type="password" name="password" value="{{ old('password') }}" required>
                    @include('errors', ['field' => 'password'])
        		</div>
        	</div>
        	<div class="form-group row">
        		<div class="offset-sm-4 col-md-8">
        			<div class="checkbox">
        				<label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                </div>
            </div>
        	<div class="form-group row">
        		<div class="offset-sm-4 col-sm-8">
        			<a class="btn btn-secondary text-uppercase" href="{{ url('/') }}" role="button">Back</a>
        			<button class="btn btn-primary text-uppercase" type="submit">Login</button>
        			<a href="{{ url('password/reset') }}" class="btn btn-link pwd-reset">Forgot Your Password?</a>
        		</div>
        	</div>
        </form>
    </div>
    <div class="col-md-3"></div>

@stop