@extends('auth::index')

@section('content')
    {{ Form::open(['route' => 'authenticate', 'class' => 'form-signin']) }}

    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
        {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
        {{ Form::text('email', null, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}

        {!! $errors->first('email', '<div class="form-control-feedback">:message</div>') !!}
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
        {{ Form::label('password', 'Password', ['class' => 'control-label']) }}
        {{ Form::password('password', ['class' => 'form-control']) }}

        {!! $errors->first('password', '<div class="form-control-feedback">:message</div>') !!}
    </div>

    <div class="form-group text-xs-right mt-2">
        {{ Form::button('Login', ['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
    </div>

    @if(Route::has('register'))
        <div class="text-xs-center">
            <a href="{{ route('register') }}">Don't have an account?</a>
        </div>
    @endif

    {{ Form::close() }}
@endsection