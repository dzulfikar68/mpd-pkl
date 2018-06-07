@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Lihat Foto <small>Galeri</small> <a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('galerifoto/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-camera"></i>  <a href="{{ URL::to('admin-galeri-all/') }}">Galeri</a>
                    </li>
                    <li class="active">
                        Lihat Foto
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-12">
                
                    <br>
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @foreach($galeriShow as $index => $galeri)
                    
                    <div class="form-group">
                        <label>Judul</label>
                        <p class="form-control-static">{{$galeri->judul}}</p>
                    </div><hr>
                    
                    <div class="form-group">
                        <label>Foto</label>
                        <img class="img-responsive" src="{{url('galeri/'.$galeri->gambar)}}" alt="">
                    </div><hr>

                    <div class="form-group">
                        <label>Tanggal Buat</label>
                        <p class="form-control-static">{{$galeri->created_at}}</p>
                    </div>
                    
                    <br>

                    <a type="submit" class="btn btn-danger" href="{{ URL::to('admin-galeri-delete/'.$galeri->id_galeri) }}" > Hapus</a>
                    <a type="submit" class="btn btn-warning" href="{{ URL::to('admin-galeri-all/') }}" > Keluar</a>
                    
                    @endforeach
                
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop