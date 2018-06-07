@extends("master")

@section("content")

<div class="container">
    <p></p>

    <div class="row col-sm-12">
        <div class="panel panel-default" style="background-color: #cccccc;">
            <h3 align="center">Login</h3>
            <br>
        </div>

        <div class="col-sm-4"></div>
        <div class="panel-body col-sm-4">
            @if(Session::has('message'))
            <div class="alert alert-success alert-info" align="center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
            </div>
            @endif
            <form role="form" method="post" action="{{action('LoginController@login')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" placeholder="masukkan username" name="username">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="masukkan password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    </div>

@stop