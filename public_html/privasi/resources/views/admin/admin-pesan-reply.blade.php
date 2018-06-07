@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Balas Pesan <small>Buku Tamu</small> <button type="button" class="btn btn-xs btn-default" href="{{ URL::to('profil/') }}">Petinjau</button>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>  <a href="{{ URL::to('admin-pesan-all/') }}">Buku Tamu </a>
                    </li>
                    <li class="active">
                        Balas Pesan
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-9">

                <br>
                
        <!-- PAKAI MODAL (KALAU BISA)-->
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                @foreach($pesanShow as $index => $pesan)
                <div class="form-group">
                    <label>Tanggal Masuk:</label>
                    <p class="form-control-static">{{ $pesan->created_at }}</p>
                </div><hr>
                <div class="form-group">
                    <label>Nama Lengkap:</label>
                    <p class="form-control-static">{{ $pesan->nama }}</p>
                </div><hr>
                <div class="form-group">
                    <label>Nomor Telepon:</label>
                    <p class="form-control-static">{{ $pesan->nope }}</p>
                </div><hr>
                <div class="form-group">
                    <label>Alamat Email:</label>
                    <p class="form-control-static">{{ $pesan->email }}</p>
                </div><hr>
                <div class="form-group">
                    <label>Pesan:</label>
                    <p class="form-control-static">{{ $pesan->isi }}</p>
                </div>

                <br>

                <a type="submit" class="btn btn-primary" href="mailto:{{ $pesan->email }}?subject=[Balasan] untuk Pesan: {{ $pesan->isi }}
                &body=Hai {{ $pesan->nama }}, Terima Kasih sudah mengirimkan Pesan ke MPD">Kirim</a>

                <a type="submit" class="btn btn-warning" href="{{ URL::to('admin-pesan-all') }}">Keluar</a>

                <a type="submit" class="btn btn-danger" href="{{ URL::to('admin-pesan-delete/'.$pesan->id_pesan) }}">Hapus</a>

                @endforeach

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop