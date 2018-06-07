@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Galeri
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="active">Galeri</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <p>Berikut adalah kumpulan <strong>foto-foto</strong> yang dapat dilihat tentang kegiatan yang ada di Masjid Pangeran Diponegoro: </p><br>

    <!-- Related Projects Row -->
    <div class="row">
    @if($galeriAll[0] != null)
    @foreach($galeriAll as $index => $galeri)
        <div class="col-md-2 col-sm-4 col-xs-6">
            <div class="ultralb">
                <img class="img-responsive img-hover img-related customer-img" src="{{ url('galeri/'.$galeri->gambar) }}" 
                alt="{{ $galeri->judul }} <br> <small><i>({{ $galeri->created_at }})</i></small>">
            </div>
        </div>
    @endforeach
    @else
        <div class="col-sm-12">
            <div class="alert alert-info" role="alert" align="center"><i>Tidak ada foto di Galeri</i></div>
        </div>
    @endif
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pager -->
    <strong>Jumlah foto: {{$jumlah}}</strong>
    
    <div class="paging">
        {{ $galeriAll->links() }}
    </div>
    
    <br><br><br><br>
    <!-- /.row -->

    @stop