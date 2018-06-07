@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Detail Laporan <small>Donasi</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('donasi/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-file"></i>  <a href="{{ URL::to('admin-donasi-addx/') }}">Donasi</a>
                    </li>
                    <li class="active">
                        Detail Laporan
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

                <form role="form" method="post" action="{{action('admin\DonasiController@excel')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label>Link detail</label>
                        <input class="form-control" placeholder="masukkan link id (google spreadsheet)" name="link">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

                <br>

                <hr>

                <h4>Tampilan Detail</h4>

                @if($excel[0] != null)
                @foreach($excel as $index => $ex)
                <iframe class="embed-responsive-item" width="100%" height="500" scrolling="no" frameborder="no" src="https://docs.google.com/spreadsheets/d/{{ $ex->link }}/pubhtml?widget=true&amp;headers=false"></iframe>
                @endforeach

                @else
                <p class="form-control-static"><i>Tidak ada</i></p>

                @endif

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop