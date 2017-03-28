@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua File <small>Unduhan</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('unduhan/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-download"></i>  <a href="{{ URL::to('admin-unduhan-all/') }}">Unduhan</a>
                    </li>
                    <li class="active">
                        Semua File
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-7">
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
                </div>
                @endif
                
                <br>

                <form role="form" method="post" action="{{action('admin\UnduhanController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

<!--                    <h3>Unduhan</h3>-->

                    <div class="form-group">
                        <label>Link Google Drive</label>
                        <input class="form-control" placeholder="masukkan link id" name="link">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

                <hr>

                <label>Tampilan Drive</label>
                @foreach($unduhan as $index => $undu)
                <iframe class="embed-responsive-item" width="100%" height="500" frameborder="no" src="https://drive.google.com/embeddedfolderview?id={{$undu->link}}#list" width="700" height="500" frameborder="0"></iframe>
                @endforeach

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop