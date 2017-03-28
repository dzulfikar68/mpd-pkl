@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Berita
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="active">Berita</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <i><strong>kata kunci: </strong></i>
    @if($beritaKunci[0] != null)
    @foreach($beritaKunci as $index => $berita)
    <!-- Kata Kunci -->
        <i><a href="{{ URL::to('berita/'.$berita->kunci) }}">{{$berita->kunci}}</a>, </i>
    @endforeach

    @else
        <i>Tidak ditemukan kata kunci</i>
    @endif

    <br><br><br>

    <!-- Post Berita -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Post Berita</h2>
        </div>
    </div>
    
    <br>
    
    @if($beritaAll[0] != null)
    @foreach($beritaAll as $index => $berita)
    
    <!-- Blog Post Row -->
    <div class="row">
        <div class="col-sm-6">
            <a href="{{ URL::to('berita/'.$berita->kunci.'/'.$berita->id_berita) }}">
                <img class="img-responsive img-hover post-image-small" style="background-image:url({{url('resource/berita.png')}});" src="{{ url('foto/'.$berita->gambar) }}" alt="{{$berita->gambar}}">
            </a>
        </div>
        <div class="col-sm-6">
            <h3>
                <a href="{{ URL::to('berita/'.$berita->kunci.'/'.$berita->id_berita) }}"><?php echo substr(strip_tags($berita->judul), 0, 75) ?></a>
            </h3>
            <p><i><strong>kata kunci</strong> <a href="{{ URL::to('berita/'.$berita->kunci) }}">{{$berita->kunci}}</a></i></p>
            <?php echo substr(strip_tags($berita->isi), 0, 350) ?><br>
            <a class="btn btn-primary" href="{{ URL::to('berita/'.$berita->kunci.'/'.$berita->id_berita) }}"><i class="fa fa-angle-right">Read More </i></a>
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
    
    <strong>Jumlah berita: {{$jumlah}}</strong>
    
    <div class="paging">
        {{ $beritaAll->links() }}
    </div>
    
    <br><br><br><br>

    @stop