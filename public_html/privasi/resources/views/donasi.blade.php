@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Donasi
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="active">Donasi</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive img-hover" style="background-color: #cccccc; border: 2px; border-radius: 4px;" src="{{ url('resource/donasi.png') }}" alt="">
        </div>
        <div class="col-md-6">
            <p class="lead" align="justify">Kami dari Masjid Pangeran Diponegoro menerima donasi/ infaq berupa uang atau dalam bentuk lain. Dibawah ini adalah prosedur donasi beserta laporan pemasukan dan pengeluaran dana oleh Masjid Pangeran Diponegoro Semarang:</p>
            <p align="justify">Apabila pendonasi ingin transfer melalui rekening, bisa mengirim email konfirmasi ke: <strong><i>masjidpangerandiponegoro@gmail.com</i></strong><br>atau dapat secara langsung bertemu dengan pengurus takmir masjid sesuai jam kerja pengurus.<br>
            Alamat dan Kontak MPD lebih lengkap di: <strong><a href="{{ URL::to('profil') }}">Profil MPD</a></strong></p>
        </div>
    </div>
    <!-- /.row -->
    
    <br><br><br>

    <h2 class="page-header">Rekam Laporan Bulanan</h2>

    <div class="table-responsive">
        
        <table class="table table-hover table-striped">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <thead>
                <tr>
                    <th>Laporan Bulanan (YYYY-MM)</th>
                    <th>Saldo</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                </tr>
            </thead>
            <tbody>
                @if($donasiAll[0] != null)
                    @foreach($donasiAll as $index => $donasi)
                        <tr>
                            <td>{{$donasi->tanggal}}</td>
                            <td>Rp {{$donasi->saldo}}</td>
                            <td>Rp {{$donasi->masuk}}</td>
                            <td>Rp {{$donasi->keluar}}</td>
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
    
    <br><br><br><br>

    <h2 class="page-header">Detail Laporan Terbaru</h2>

    @if($excel[0] != null)
    @foreach($excel as $index => $ex)
    <iframe class="embed-responsive-item" width="100%" height="500" scrolling="no" frameborder="no" src="https://docs.google.com/spreadsheets/d/{{ $ex->link }}/pubhtml?widget=true&amp;headers=false"></iframe>

    <br><br>

    <a type="submit" class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/{{ $ex->link }}/edit#gid=0" target="_blank">Unduh Berkas</a>
    @endforeach

    @else
    <p class="form-control-static"><i>Tidak ada detail</i></p>

    @endif

    @stop