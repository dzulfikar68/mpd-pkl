@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua Foto <small>Galeri</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('galerifoto/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-camera"></i>  <a href="{{ URL::to('admin-galeri-all/') }}">Galeri</a>
                    </li>
                    <li class="active">
                        Semua Foto
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-12">
                
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
                </div>
                @endif

                @if(Session::has('destroy'))
                <div class="alert alert-success alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('destroy') }}</strong>
                </div>
                @endif

                <br>
                
<!--                <h3>Edit Galeri</h3>-->
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <thead>
                            <tr>
                                <th>Tanggal Buat</th>
                                <th>Judul</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($galeriAll[0] != null)
                                @foreach($galeriAll as $index => $galeri)
                                    <tr>
                                        <td>{{$galeri->created_at}}</td>
                                        <td><?php echo substr(strip_tags($galeri->judul), 0, 75) ?></td>
                                        <td>
                                            <a type="submit" class="btn btn-sm btn-primary" href="{{ URL::to('admin-galeri-view/'.$galeri->id_galeri) }}">Lihat</a>
                                            <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-galeri-delete/'.$galeri->id_galeri) }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" style="text-align: center"><i>Tidak Ada Foto</i></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <!-- Pager -->
                <div class="tabel-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah foto: {{ $jumlah }} 
                        </strong>
                    </div>
                    <div class="paging">
                        {{ $galeriAll->links() }}
                    </div>
                </div>
                <!-- /.row -->

                <br>
                
                <div>
                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-galeri-add/') }}" >Tambah Foto</a>
                </div>    
            
                <br><br><br><br>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop