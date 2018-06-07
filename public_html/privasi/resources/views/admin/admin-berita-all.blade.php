@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua Post <small>Berita</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('berita/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-list"></i>  <a href="{{ URL::to('admin-berita-all/') }}">Berita</a>
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

                <strong>Kata kunci: </strong>
                @if($beritaKunci[0] != null)
                @foreach($beritaKunci as $index => $berita)
                <!-- Kata Kunci -->
                    <i><a href="{{ URL::to('admin-berita-all/'.$berita->kunci) }}">{{$berita->kunci}}</a>, </i>
                @endforeach

                @else
                    <i>Tidak ditemukan kata kunci</i>
                @endif
                
                <br><br>
                
<!--                <h3>Edit Post Berita</h3>-->
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <thead>
                            <tr>
                                <th>Tanggal Buat</th>
                                <th>Judul</th>
                                <th>Kata Kunci</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($beritaAll[0] != null)
                                @foreach($beritaAll as $index => $berita)
                                    <tr>
                                        <td>{{$berita->created_at}}</td>
                                        <td><?php echo substr(strip_tags($berita->judul), 0, 75) ?></td>
                                        <td>{{$berita->kunci}}</td>
                                        
                                        <td>
                                            <a type="submit" class="btn btn-sm btn-primary" href="{{ URL::to('admin-berita-view/'.$berita->id_berita) }}">Lihat</a>
                                            <a type="submit" class="btn btn-sm btn-warning" href="{{ URL::to('admin-berita-edit/'.$berita->id_berita) }}">Edit</a>
                                            <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-berita-delete/'.$berita->id_berita) }}"> Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" style="text-align: center"><i>Tidak Ada berita</i></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <!-- Pager -->
                <div class="tabel-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah berita: {{ $jumlah }}
                        </strong>
                    </div>
                    <div class="paging">
                        {{ $beritaAll->links() }}
                    </div>
                </div>
                <!-- /.row -->

                <br>
                
                <div>
                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-berita-add/') }}" >Tambah Berita</a>
                </div>    
            
                <br><br><br><br>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


@stop