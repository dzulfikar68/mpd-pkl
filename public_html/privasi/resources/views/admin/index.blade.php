@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Beranda
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Beranda
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
                
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>Selamat Datang di Admin MPD (Masjid Pangeran Diponegoro)</strong>, silahkan klik: <a href="{{ URL::to('') }}" class="alert-link">Website MPD</a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- PESAN -->
            <div class="col-md-4">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-envelope fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$pesanAll}}</div>
                                <div>Jumlah Pesan Masuk</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ URL::to('admin-pesan-all/') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


            <!-- KAJIAN -->
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-book fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$kajianAll}}</div>
                                <div>Total Post Kajian</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ URL::to('admin-kajian-all/') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- DONASI -->
            <div class="col-md-4">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{{$saldo->saldo}}</div>
                                <div>Saldo Donasi Terkini</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ URL::to('admin-donasi-all/') }}">
                        <div class="panel-footer">
                            <span class="pull-left">Lihat Detail</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            
            <div class="col-md-4">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-comment fa-fw"></i> Pesan Masuk</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                        @if($pesan[0] != null)
                        @foreach($pesan as $index => $pes)
                            <a href="{{ URL::to('admin-pesan-reply/'.$pes->id_pesan) }}" class="list-group-item">
                                <span class="badge"><?php echo substr(strip_tags($pes->nama), 0, 10) ?></span>
                                <i class="fa fa-fw fa-user"></i> <?php echo substr(strip_tags($pes->isi), 0, 20) ?>...
                            </a>
                        @endforeach
                        @else
                            <a href="{{ URL::to('admin-pesan-all/') }}" class="list-group-item">
                                <i>tidak ada pesan</i>
                            </a>
                        @endif
                        </div>
                        <div class="text-right">
                            <a href="{{ URL::to('admin-pesan-all/') }}">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-th fa-fw"></i> Persentase Kajian</h3>
                    </div>
                    <div class="panel-body">
                        @if($pesanAll > 1)
                        <canvas id="canvas" height="262">
                            No Love for HTML5 eh?
                        </canvas>
                        @else
                        <canvas id="canvas" height="85">
                            No Love for HTML5 eh?
                        </canvas>
                        @endif
                        <div class="text-right">
                            <a href="{{ URL::to('admin-kajian-all/') }}">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Pemasukan Donasi</h3>
                    </div>
                    <div class="panel-body" style="margin-bottom: 25px">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Laporan Bulanan</th>
                                        <th>Saldo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($donasi[0] != null)
                                @foreach($donasi as $index => $don)
                                    <tr>
                                        <td>{{$don->tanggal}}</td>
                                        <td>{{$don->saldo}}</td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" style="text-align: center"><i>tidak ada donasi</i></td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right">
                            <a href="{{ URL::to('admin-donasi-all/') }}">Lihat Detail <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

       <!--  <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Grafik Postingan Kajian</h3>
                    </div>
                    <div class="panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop