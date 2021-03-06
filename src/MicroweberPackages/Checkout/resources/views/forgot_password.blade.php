@extends('checkout::layout')

@section('logo-right-link')
    <div class="ml-auto align-self-center">
        <a href="{{ route('checkout.login') }}" class="btn btn-link text-right">{{ _e('Login') }}</a>
        <a href="{{ route('checkout.register') }}" class="btn btn-link text-right">{{ _e('Register') }}</a>
    </div>
@endsection

@section('steps_content')

    <module type="users/forgot_password" template="checkout_v2" />
@endsection
