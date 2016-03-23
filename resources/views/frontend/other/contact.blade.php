@extends('layouts.master')

@section('title')
	Contact
@endsection

@section('styles')
	<link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}" type="text/css">
@endsection

@section('content')
	@include('includes.info-box')
	<form action="{{ route('contact.send') }}" method="post" id="contact-form">
		<div class="input-group">
			<label for="name">Your Name</label>
			<input type="text" name="name" id="name" value="{{ Request::old('name') }}">
		</div>
		<div class="input-group">
			<label for="email">Your Email</label>
			<input type="email" name="email" id="email" value="{{ Request::old('email') }}">
		</div>
		<div class="input-group">
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject" value="{{ Request::old('subject') }}">
		</div>
		<div class="input-group">
			<label for="message">Your Message</label>
			<textarea name="message" id="message" rows="10">{{ Request::old('message') }}</textarea>
		</div>
		<button type="submit" class="button">Submit Message</button>
		<input type="hidden" value="{{ session::token() }}" name="_token">
	</form>
@endsection