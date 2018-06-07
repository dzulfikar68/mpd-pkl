@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Semua Laporan <small>Donasi</small> <a type="button" class="btn btn-xs btn-default" href="{{ URL::to('donasi/') }}">Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-file"></i>  <a href="{{ URL::to('admin-donasi-all/') }}">Donasi</a>
                    </li>
                    <li class="active">
                        Semua Laporan
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

                <div class="table-responsive">
                    
                    <table class="table table-hover table-striped">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <thead>
                            <tr>
                                <th>Laporan Bulanan (YYYY-MM)</th>
                                <th>Saldo</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($donasiAll[0] != null)
                                @foreach($donasiAll as $index => $donasi)
                                    <tr>
                                        <td>{{$donasi->tanggal}}</td>
                                        <td>{{$donasi->saldo}}</td>
                                        <td>{{$donasi->masuk}}</td>
                                        <td>{{$donasi->keluar}}</td>
                                        <td>
                                            <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-donasi-delete/'.$donasi->id_donasi) }}">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" style="text-align: center"><i>Tidak Ada Laporan</i></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="tabel-nav">
                    <div class="paging">
                        {{ $donasiAll->links() }}
                    </div>
                </div>
                
                <br>
                
                <div>
                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-donasi-adds/') }}" >Tambah Donasi</a>
                </div>   

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop