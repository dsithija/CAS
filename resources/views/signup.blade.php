@extends('layouts.cas')

@section('content')
	<div class="container header">
        <h1 style="float: left;">Sign up with CAS</h1>
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
	    <form role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group row{{ $errors->has('name') ? ' has-danger' : '' }}">
                <label for="name" class="col-sm-4">Name</label>

                <div class="col-sm-8">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? " form-control-danger" : "" }}" name="name" value="{{ old('name') }}"  autofocus>
                    @include('errors', ['field' => 'name'])
                </div>
            </div>

            <div class="form-group row{{ $errors->has('email') ? ' has-danger' : '' }}">
                <label for="email" class="col-sm-4">E-Mail Address</label>

                <div class="col-sm-8">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? " form-control-danger" : "" }}" name="email" value="{{ old('email') }}" >
                    @include('errors', ['field' => 'email'])
                </div>
            </div>

            <div class="form-group row{{ $errors->has('password') ? ' has-danger' : '' }}">
                <label for="password" class="col-sm-4">Password</label>

                <div class="col-sm-8">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? " form-control-danger" : "" }}" name="password" >
                    @include('errors', ['field' => 'password'])
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-sm-4">Confirm Password</label>

                <div class="col-sm-8">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3"></div>

@stop