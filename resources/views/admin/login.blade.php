@extends('layouts.admin-master')

@section('styles')
	<link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}" type="text/css">
@endsection

@section('content')
	<div class="container">
		@include('includes.info-box')
		<form action="{{ route('admin.login') }}" method="post">
			<div class="input-group">
				<label for="email">E-Mail</label>
				<input type="email" name="email" id="email" {{ $errors->has('email') ? 'class=has-error' : '' }} value="{{ Request::old('email') }}">
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" {{ $errors->has('password') ? 'class=has-error' : '' }}>
			</div>
			<button class="btn" type="submit">Login</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</div>
@endsection