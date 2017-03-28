@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua Pesan <small>Buku Tamu</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('profil/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>  <a href="{{ URL::to('admin-pesan-all/') }}">Buku Tamu </a>
                    </li>
                    <li class="active">
                        Semua Pesan
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-12">

                @if(Session::has('destroy'))
                <div class="alert alert-success alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('destroy') }}</strong>
                </div>
                @endif

                <br>
                
<!--                <h3>Buku Tamu </h3> -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal Masuk</th>
                                <th>Nama</th>
                                <th>Nomor</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($pesanAll[0] != null)
                        @foreach($pesanAll as $index => $pesan)
                            <tr>
                                <td>{{ $pesan->created_at }}</td>
                                <td><?php echo substr(strip_tags($pesan->nama), 0, 15) ?></td>
                                <td><?php echo substr(strip_tags($pesan->nope), 0, 12) ?></td>
                                <td><?php echo substr(strip_tags($pesan->email), 0, 10) ?></td>
                                <td><?php echo substr(strip_tags($pesan->isi), 0, 50) ?></td>
                                <td>
                                    <a type="submit" class="btn btn-sm btn-primary" href="{{ URL::to('admin-pesan-reply/'.$pesan->id_pesan) }}"> Lihat</a>
                                    <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-pesan-delete/'.$pesan->id_pesan) }}"> Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="6" style="text-align: center"><i>Tidak Ada Pesan</i></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-pesan-delete-all/') }}"> 
                    Hapus Semua Pesan </a>
                </div>

                <br>

                <div class="tabel-nav">
                    <div class="jumlah-data">
                        <strong> Jumlah pesan: {{ $jumlah }}
                        </strong>
                    </div>
                    <div class="paging">
                        {{ $pesanAll->links() }}
                    </div>
                </div>

                <br><br><br><br>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop