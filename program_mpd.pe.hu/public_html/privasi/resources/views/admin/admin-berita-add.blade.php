@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Tambah Post <small>Berita</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('berita/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-list"></i>  <a href="{{ URL::to('admin-berita-all/') }}">Berita</a>
                    </li>
                    <li class="active">
                        Tambah Post
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-9">

                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>, klik <a href="{{ URL::to('admin-berita-all/') }}" class="alert-link">Semua Berita</a>
                </div>
                @endif

                <form role="form" method="post" enctype="multipart/form-data" action="{{action('admin\BeritaController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br>

                    @if($errors->has())
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>{{ $errors->first('judul') }}</strong>, silahkan isi Judul Berita
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" placeholder="masukkan judul (wajib)" name="judul">
                    </div>

                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" name="gambar">
                    </div>

                    <div class="form-group">
                        <label>Kalimat Ajakan</label>
                        <textarea class="form-control" rows="3" name="ajakan"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" rows="20" name="isi" id="form_isi"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Link Audio</label>
                        <input class="form-control" placeholder="masukkan tautan embed soundcloud" name="audio">
                    </div>

                    <div class="form-group">
                        <label>Link Video</label>
                        <input class="form-control" placeholder="masukkan tautan embed youtube" name="video">
                    </div>

                    <div class="form-group">
                        <label>Kata Kunci</label>
                        <input class="form-control" placeholder="masukkan kata kunci" name="kunci">
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