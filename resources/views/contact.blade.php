@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <h2>Contact Us</h2>

    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
            <span class="error-message" id="name-error"></span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
            <span class="error-message" id="email-error"></span>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control">{{ old('message') }}</textarea>
            <span class="error-message" id="message-error"></span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="{{ asset('js/validation.js') }}"></script>
@endsection

@section('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection

