@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Tambah Laporan <small>Donasi</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('donasi/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-file"></i>  <a href="{{ URL::to('admin-donasi-adds/') }}">Donasi</a>
                    </li>
                    <li class="active">
                        Tambah Laporan
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-6">

                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>, klik <a href="{{ URL::to('admin-donasi-all/') }}" class="alert-link">Semua Donasi</a>
                </div>
                @endif

                <br>

                <div class="row">
                    <div class="col-sm-6">

                    <form role="form" method="post" action="{{action('admin\DonasiController@store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label>Laporan Bulanan</label>
                            <br>
                            <input class="form-control" type="month" name="tanggal">
                        </div>

                        <div class="form-group">
                            <label>Input Saldo</label>
                            <input class="form-control" placeholder="masukkan angka (tanpa titik)" name="saldo">
                        </div>

                        <div class="form-group">
                            <label>Input Pemasukan</label>
                            <input class="form-control" placeholder="masukkan angka (tanpa titik)" name="masuk">
                        </div>

                        <div class="form-group">
                            <label>Input Pengeluaran</label>
                            <input class="form-control" placeholder="masukkan angka (tanpa titik)" name="keluar">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop