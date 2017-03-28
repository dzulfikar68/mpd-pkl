@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua Post <small>Mahad Al Madinah</small> <a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('mahad/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-book"></i>  <a href="{{ URL::to('admin-mahad-all/') }}">Mahad</a>
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
                
                <br>

<!--                <h3>Edit Post Mahad</h3>-->
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
                        @if($mahadAll[0] != null)
                            @foreach($mahadAll as $index => $mahad)
                            <tr>
                                <td>{{$mahad->created_at}}</td>
                                <td><?php echo substr(strip_tags($mahad->judul), 0, 75) ?></td>
                                <td>
                                    <a type="submit" class="btn btn-sm btn-primary" href="{{ URL::to('admin-mahad-view/'.$mahad->id_mahad) }}">Lihat</a>
                                    <a type="submit" class="btn btn-sm btn-warning" href="{{ URL::to('admin-mahad-edit/'.$mahad->id_mahad) }}">Edit</a>
                                    <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-mahad-delete/'.$mahad->id_mahad) }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <td colspan="5" style="text-align: center"><i>Tidak Ada Post</i></td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>

                <!-- Pager -->
                <div class="tabel-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah post: {{ $jumlah }} 
                        </strong>
                    </div>
                    <div class="paging">
                        {{ $mahadAll->links() }}
                    </div>
                </div>

                <br>
                
                <div>
                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-mahad-add/') }}" >Tambah Kajian</a>
                </div>    
            
                <br><br><br><br>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop