@extends('app')

@section('content')
    <div class="col-md-6 col-md-offset-3 ">
        <h2>Log in</h2>
        <hr class="colorgraph">
        {!!Form::open() !!}
        <div class="form-group">
            {!! Form::label('email', 'E-mail Address:') !!}
            {!!Form::email('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'you@example.com']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!!Form::password('password',  ['class' => 'form-control']) !!}
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6">{!!Form::submit('Log in',  ['class' => 'btn btn-primary btn-block btn-lg']) !!}</div>

            <div class="col-xs-12 col-md-6"><a href="{{ URL::route('register') }}" class="btn btn-success btn-block btn-lg">Register</a></div>



        </div>
        {!!Form::close()!!}
    </div>

        @include('errors.list')


@stop