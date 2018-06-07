@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Tambah Foto <small>Galeri</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('galerifoto/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-camera"></i>  <a href="{{ URL::to('admin-galeri-all/') }}">Galeri</a>
                    </li>
                    <li class="active">
                        Tambah Foto
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-8">
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
                </div>
                @endif

                <br>

                <form role="form" method="post" enctype="multipart/form-data" action="{{action('admin\GaleriController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

<!--                    <h3>Tambah Galeri</h3>-->

                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" placeholder="masukkan judul foto (wajib)" name="judul">
                    </div>
                    
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop