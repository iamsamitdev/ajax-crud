@extends('admin.layouts.default')

@section('title_page') Manager Dashboard @stop

@section('content')
	<div class="jumbotron">
		<div class="container">
			<p class="text-right">{{Auth::user()->fullname}}</p>
			<h1>Manager Dashboard</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>
				<a href="{{url('admin/logout')}}" class="btn btn-primary btn-lg">Logout</a>
			</p>
		</div>
	</div>
@stop