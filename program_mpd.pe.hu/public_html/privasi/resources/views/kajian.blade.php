@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Kajian Rutin
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li><a href="{{ URL::to('kegiatan/') }}">Kegiatan</a>
                </li>
                <li class="active">Kajian</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 img-portfolio">
            <h4>
                <a href="{{ URL::to('kajian/Tauhid') }}">Tauhid/ Akidah</a>
            </h4>
            <small>mempelajari ilmu pengetahuan dalam memahami perkara-perkara yang berkaitan keyakinan terhadap Allah swt dan sifat-sifat kesempurnaanNya. Akidah yang benar adalah akidah yang berdasarkan pada al-Quran dan As-Sunnah</small>
        </div>
        <div class="col-md-4 img-portfolio">
            <h4>
                <a href="{{ URL::to('kajian/Fiqih') }}">Fiqih/ Ibadah</a>
            </h4>
            <small>mempelajari ilmu syariat Islam yang secara khusus membahas persoalan hukum yang mengatur berbagai aspek kehidupan manusia, baik kehidupan pribadi, bermasyarakat maupun kehidupan manusia dengan Allah</small>
        </div>
        <div class="col-md-4 img-portfolio">
            <h4>
                <a href="{{ URL::to('kajian/Akhlak') }}">Akhlak/ Adab</a>
            </h4>
            <small>mempelajari ilmu tolok ukur norma-norma yang tumbuh dan berkembang dan berlangsung dalam masyarakat (adat istiadat), dan dalam akhlaq menggunakan ukuran Al Qur’an dan Al Hadis untuk menentukan baik-buruknya</small>
        </div>
        <div class="col-md-4 img-portfolio">
            <h4>
                <a href="{{ URL::to('kajian/Tafsir') }}">Tafsir/ Kitab</a>
            </h4>
            <small>mempelajari ilmu untuk memahami kitab Allah yang diturunkan kepada Nabi Muhammad yang menerangkan maknanya, menyingkap hukum dan hikmahnya</small>
        </div>
        <div class="col-md-4 img-portfolio">
            <h4>
                <a href="{{ URL::to('kajian/Sirah') }}">Sirah/ Sejarah</a>
            </h4>
            <small>mempelajari ilmu yang kompeten yang mengumpulkan apa yang diterima dari fakta-fakta sejarah kehidupan Nabi, Rasul dan pengikutnya secara komprehensif dari sifat-sifatnya, etika dan moral</small>
        </div>
        <div class="col-md-4 img-portfolio">
            <h4>
                <a href="{{ URL::to('kajian/Tematik') }}">Tematik/ Umum</a>
            </h4>
            <small>mempelajari ilmu secara tepadu yang menggunakan tema untuk mengaitkan beberapa tema ilmu pengetahuan sehingga dapat memberikan pengalaman bermakna kepada penuntut ilmu</small>
        </div>
    </div>
    <!-- /.row -->
    
    <br>
    
    <!-- Post Kajian -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Post Kajian</h2>
        </div>
    </div>
    
    <br>
    
    @if($kajianAll[0] != null)
    @foreach($kajianAll as $index => $kajian)
    
    <!-- Blog Post Row -->
    <div class="row">
        <div class="col-sm-6">
            <a href="{{ URL::to('kajian/'.$kajian->kategori.'/'.$kajian->id_kajian) }}">
                <img class="img-responsive img-hover post-image-small" style="background-image:url({{url('resource/kajian.png')}});" src="{{ url('foto/'.$kajian->gambar) }}" alt="{{$kajian->gambar}}">
            </a>
        </div>
        <div class="col-sm-6">
            <h3>
                <a href="{{ URL::to('kajian/'.$kajian->kategori.'/'.$kajian->id_kajian) }}"><?php echo substr(strip_tags($kajian->judul), 0, 75) ?></a>
            </h3>
            <p><i><strong>kategori</strong> <a href="{{ URL::to('kajian/'.$kajian->kategori) }}">{{$kajian->kategori}}</i></a></p>
            <?php echo substr(strip_tags($kajian->isi), 0, 350) ?>...<br>
            <a class="btn btn-primary" href="{{ URL::to('kajian/'.$kajian->kategori.'/'.$kajian->id_kajian) }}"><i class="fa fa-angle-right">Read More </i></a>
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
    
    <strong>Jumlah kajian: {{$jumlah}}</strong>
    
    <div class="paging">
        {{ $kajianAll->links() }}
    </div>
    
    <br><br><br><br>
    
    @stop