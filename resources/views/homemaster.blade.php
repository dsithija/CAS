@extends('layouts.cas')

@section('content')
	<div class="container header">
        <h1 style="float: left;">Welcome to CAS</h1>
    </div>

    <div class="col-md-6 p-a-30 gray-border-lt clearfix">
    	<h3>List of available services</h3>
    	<div class="col-xs-6 p-r-15">
    		<a class="btn btn-primary text-uppercase btn-block" href="#" role="button">Login to CX</a>
    	</div>
    	<div class="col-xs-6 p-l-15">
    		<a class="btn btn-primary text-uppercase btn-block" href="#" role="button">Login to IVS</a>
    	</div>
    </div>
    <div class="col-md-6 p-a-30 gray-border-ltr clearfix">
    	<h3>Manage Accounts</h3>
    	<table class="col-xs-12">
    		<tr>
    			<th>Name</th>
    			<th>ID</th>
    			<th></th>
    		</tr>
    		<tr>
    			<td>User 1</td>
    			<td>1</td>
    			<td><a href="#">Edit</a></td>
    		</tr>
    		<tr>
    			<td>User 2</td>
    			<td>2</td>
    			<td><a href="#">Edit</a></td>
    		</tr>
    		<tr>
    			<td>User 3</td>
    			<td>3</td>
    			<td><a href="#">Edit</a></td>
    		</tr>
    		<tr>
    			<td>User 4</td>
    			<td>4</td>
    			<td><a href="#">Edit</a></td>
    		</tr>
    	</table>
    </div>

@stop