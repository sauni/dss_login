@extends('app')

@section('content')



        <div class="wrappermaincont">
            <nav class="navbar navbar-default">

                    <ul class="nav navbar-nav">
                        <li class="nav active"><a href="#">Home</a></li>
                        <li class="nav"><a href="#">Contact</a></li>
                        <li class="nav"><a href="#">Fun</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav ">{!!Html::link('/logout','Logout')!!}</li>
                    </ul>
            </nav>
            <div class="container">
                <h2>welcome</h2>
            </div>
            <hr class="colorgraph">
            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, cumque cupiditate delectus eos laboriosam magni
                    minima nemo numquam odio odit officiis pariatur praesentium quaerat sapiente sed sequi totam ut voluptatum.
                </p>
            </div>
        </div>

@stop