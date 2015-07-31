@extends('app')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <h2>Register</h2>
        <hr class="colorgraph">
            {!!Form::open() !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!!Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => 'Full Name']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'E-mail Address:') !!}
                    {!!Form::email('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'you@example.com']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!!Form::password('password',  ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirm Password:') !!}
                    {!!Form::password('password_confirmation',  ['class' => 'form-control']) !!}
                </div>

                <div class="row">
                    <div class="col-md-6">{!!Form::submit('Register',  ['class' => 'btn btn-primary btn-block btn-lg']) !!}</div>

                    <div class="col-md-6"><a href="{{ URL::route('login') }}" class="btn btn-success btn-block btn-lg">Log in</a></div>

                </div>
            {!!Form::close()!!}
    </div>

    @include('errors.list')
@stop