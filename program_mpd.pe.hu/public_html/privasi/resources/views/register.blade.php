@extends("master")

@section("content")

<div class="container">
    <p></p>
    <div class="panel panel-default">
        <h3 align="center">Register</h3>
        <br>
    </div>
        @if(Session::has('message'))
        <span class="label label-danger">{{ Session::get('message') }}</span>
        @endif
    <div class="col-md-4"></div>
    <div class="panel-body col-md-4">
        <form role="form" method="post" action="{{action('LoginController@tambahlogin')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" placeholder="masukkan username" name="username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="masukkan password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>

@stop