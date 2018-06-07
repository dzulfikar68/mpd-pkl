@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua Post <small>Kajian Rutin</small> <a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('kajian/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-play"></i>  <a href="{{ URL::to('admin-kajian-all/') }}">Kajian</a>
                    </li>
                    <li class="active">
                        Semua Post
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
                
                <div><span><strong>
                    Kategori: 
                    <a href="{{ URL::to('admin-kajian-all/Tauhid') }}">Tauhid</a><a>, </a>
                    <a href="{{ URL::to('admin-kajian-all/Fiqih') }}">Fiqih</a><a>, </a>
                    <a href="{{ URL::to('admin-kajian-all/Akhlak') }}">Akhlak</a><a>, </a>
                    <a href="{{ URL::to('admin-kajian-all/Tafsir') }}">Tafsir</a><a>, </a>
                    <a href="{{ URL::to('admin-kajian-all/Sirah') }}">Sirah</a><a>, </a>
                    <a href="{{ URL::to('admin-kajian-all/Tematik') }}">Tematik</a><a>, </a>
                </strong></span></div>
                
                <br>
                
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <thead>
                            <tr>
                                <th>Tanggal Buat</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($kajianAll[0] != null)
                                @foreach($kajianAll as $index => $kajian)
                                    <tr>
                                        <td>{{$kajian->created_at}}</td>
                                        <td><?php echo substr(strip_tags($kajian->judul), 0, 75) ?></td>
                                        <td>{{$kajian->kategori}}</td>
                                        
                                        <td>
                                            <a type="submit" class="btn btn-sm btn-primary" href="{{ URL::to('admin-kajian-view/'.$kajian->id_kajian) }}">Lihat</a>
                                            <a type="submit" class="btn btn-sm btn-warning" href="{{ URL::to('admin-kajian-edit/'.$kajian->id_kajian) }}">Edit</a>
                                            <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-kajian-delete/'.$kajian->id_kajian) }}"> Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" style="text-align: center"><i>Tidak Ada Kajian</i></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="tabel-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah kajian: {{ $jumlah }}
                        </strong>
                    </div>
                    <div class="paging">
                        {{ $kajianAll->links() }}
                    </div>
                </div>
                
                <br>
                
                <div>
                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-kajian-add/') }}" >Tambah Kajian</a>
                </div>    
            
                <br><br><br><br>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop