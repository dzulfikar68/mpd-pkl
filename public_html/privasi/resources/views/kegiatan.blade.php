@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Kegiatan
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('/') }}">Home</a>
                </li>
                <li class="active">Kegiatan</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
        <div class="col-sm-7">
            <a href="{{ URL::to('khotbah/') }}">
                <img class="img-responsive img-hover" src="{{url('resource/khotbah.png')}}" style="background-color: #cccccc; border: 2px; border-radius: 4px;" alt="">
            </a>
        </div>
        <div class="col-sm-5">
            <h3><a href="{{ URL::to('khotbah/') }}">Khotbah Jumat</a></h3>
            <h4><i>Kategori Kegiatan</i></h4>
            <p>Berisi informasi jadwal khotbah tiap ibadah shalat jum'at di masjid pangeran diponegoro semarang tiap tahunnya</p>
            <a class="btn btn-primary" href="{{ URL::to('khotbah/') }}"><i class="fa fa-angle-right">Lihat Lengkap</i></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-sm-7">
            <a href="{{ URL::to('kajian/') }}">
                <img class="img-responsive img-hover" src="{{url('resource/kajian.png')}}" style="background-color: #cccccc; border: 2px; border-radius: 4px;" alt="">
            </a>
        </div>
        <div class="col-sm-5">
            <h3><a href="{{ URL::to('kajian/') }}">Kajian Rutin</a></h3>
            <h4><i>Kategori Kegiatan</i></h4>
            <p>Berisi kajian rutin berbagai tema kajian tiap minggu oleh para pengajar/ ustadz yang diadakan di masjid pangeran diponegoro semarang</p>
            <a class="btn btn-primary" href="{{ URL::to('kajian/') }}"><i class="fa fa-angle-right">Lihat Lengkap</i></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-sm-7">
            <a href="{{ URL::to('mahad/') }}">
                <img class="img-responsive img-hover" src="{{url('resource/mahad.png')}}" style="background-color: #cccccc; border: 2px; border-radius: 4px;" alt="">
            </a>
        </div>
        <div class="col-sm-5">
            <h3><a href="{{ URL::to('mahad/') }}">Mahad Al Madinah</a></h3>
            <h4><i>Kategori Kegiatan</i></h4>
            <p>Berisi kegiatan mahad islam al madinah tiap harinya bagi santri mahasiswa dengan agenda belajar tahsin, bahasa arab dan yang lain</p>
            <a class="btn btn-primary" href="{{ URL::to('mahad/') }}"><i class="fa fa-angle-right">Lihat Lengkap</i></a>
        </div>
    </div>
    <!-- /.row -->

    <br><br><br>

@stop