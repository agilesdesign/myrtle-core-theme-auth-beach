@extends('auth::index')

@section('content')
    {{ Form::open(['route' => 'register', 'class' => 'form-signin', 'method' => 'PUT']) }}
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group{{ $errors->has('name.first') ? ' has-danger' : '' }}">
                {{ Form::label('name[first]', 'First', ['class' => 'control-label']) }}
                {{ Form::text('name[first]', null, ['class' => 'form-control']) }}

                {!! $errors->first('name.first', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="form-group{{ $errors->has('name.last') ? ' has-danger' : '' }}">
                {{ Form::label('name[last]', 'Last', ['class' => 'control-label']) }}
                {{ Form::text('name[last]', null, ['class' => 'form-control']) }}

                {!! $errors->first('name.last', '<div class="form-control-feedback">:message</div>') !!}
            </div>
        </div>
    </div>

    <div class="form-group{{ $errors->has('emails.0.address') ? ' has-danger' : '' }}">
        {{ Form::label('emails[0][address]', 'Email', ['class' => 'control-label']) }}
        {{ Form::text('emails[0][address]', null, ['class' => 'form-control']) }}

        {!! $errors->first('emails.0.address', '<div class="form-control-feedback">:message</div>') !!}
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
        {{ Form::label('password', 'Password', ['class' => 'control-label']) }}
        {{ Form::password('password', ['class' => 'form-control']) }}

        {!! $errors->first('password', '<div class="form-control-feedback">:message</div>') !!}
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
        {{ Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) }}
        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

        {!! $errors->first('password', '<div class="form-control-feedback">:message</div>') !!}
    </div>

    <div class="form-group text-xs-right mt-2">
        {{ Form::button('Signup', ['class' => 'btn btn-primary', 'type' => 'submit'] ) }}
    </div>

    <div class="text-xs-center">
        <a href="{{ route('login') }}">Already have an account?</a>
    </div>
    {{ Form::close() }}

@endsection