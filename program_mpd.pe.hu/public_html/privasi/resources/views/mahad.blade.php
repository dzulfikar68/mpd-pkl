@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Mahad Al Madinah
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li><a href="{{ URL::to('kegiatan/') }}">Kegiatan</a>
                </li>
                <li class="active">Mahad</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    @if($mahadAll[0] != null)
    @foreach($mahadAll as $index => $mahad)

    <!-- Blog Post Row -->
    <div class="row">
        <div class="col-sm-6">
            <a href="{{ URL::to('mahad/'.$mahad->id_mahad) }}">
                <img class="img-responsive img-hover post-image-small" style="background-image:url({{url('resource/mahad.png')}});" src="{{ url('foto/'.$mahad->gambar) }}" alt="{{$mahad->gambar}}">
            </a>
        </div>
        <div class="col-sm-6">
            <h3>
                <a href="{{ URL::to('mahad/'.$mahad->id_mahad) }}"><?php echo substr(strip_tags($mahad->judul), 0, 75) ?></a>
            </h3>
            <p><?php echo substr(strip_tags($mahad->isi), 0, 350) ?>...</p>
            <a class="btn btn-primary" href="{{ URL::to('mahad/'.$mahad->id_mahad) }}">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    @endforeach

    @else
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-info" role="alert" align="center"><i>Hasil pencarian tidak ditemukan</i></div>
        </div>
    </div>
    <hr>
    @endif

    <strong>Jumlah post: {{$jumlah}}</strong>
    
    <div class="paging">
        {{ $mahadAll->links() }}
    </div>
    
    <br><br><br><br>

    @stop