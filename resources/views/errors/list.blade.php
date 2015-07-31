<div class="container col-md-6 col-md-offset-3"  >
@if($errors-> any())

    <ul class="alert alert-warning list-unstyled ">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
</div>

