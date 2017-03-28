@extends("master")

@section("content")

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url({{url('resource/slidersatu.png')}});"></div>
            <div class="carousel-caption">
                <h2><!-- بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ --></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url({{url('resource/sliderdua.png')}});"></div>
            <div class="carousel-caption">
                <h2><i><!-- "Ahlan wa Sahlan" --></i></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url({{url('resource/slidertiga.png')}});");"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Selamat Datang -->
    <div class="row about">
        <br>
        <div class="col-sm-12">
            <h1 class="page-header" align="center">
                Selamat Datang di Website Kegiatan Masjid Pangeran Diponegoro
            </h1>
        </div>
        
        <!-- Tentang -->
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-bookmark"></i> Tentang</h4>
                </div>
                <div class="panel-body">
                    <p align="justify">Masjid Pangeran Diponegoro (MPD) adalah Masjid yang didirian oleh yayasan sultan agung trenggono semarang yang terletak di daerah tembalang, kota semarang. Didirikannya MPD bertujuan untuk menjalankan kegiatan syiar keislaman. Kegiatan yang dilaksanakan oleh MPD yaitu Kajian Rutin tiap minggu dan kegiatan bermanfaat lainnya</p>
                    <a href="{{ URL::to('profil') }}" class="btn btn-default"><i>Lihat Lengkap</i></a>
                </div>
            </div>
        </div>
        <!-- Peta -->
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-map-marker"></i> Peta</h4>
                </div>
                <div>
                    <!-- Embedded Google Map -->
                    <iframe width="100%" height="209px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.616711637773!2d110.42977631392846!3d-7.054243471085304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c0186ffa981%3A0xc630de323aeed4ae!2sMasjid+Pangeran+Diponegoro!5e0!3m2!1sid!2sid!4v1473778607384"></iframe>
                </div>
            </div>
        </div>
        <!-- Kontak -->
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-phone"></i> Kontak</h4>
                </div>
                <div class="panel-body" style="margin-bottom: -14px"><i>
                    <p><strong>
                        Takmir Masjid Pangeran Diponegoro<br>Jl. Tembalang No.22 Pedalangan<br>Semarang 50275, Jawa Tengah<br>
                        </strong></p>
                    <p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">P</abbr>: (024) 7470279</p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E</abbr>: <a href="mailto:masjidpangerandiponegoro@gmail.com">masjidpangerandiponegoro@gmail.com</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Setiap Hari: 7:00 AM to 7:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/DIPOMUDA-623890651040050/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/MpdSemarang" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/u/0/117797755835697632589" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li></ul></i>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <br><br>

    <!-- Post Kegiatan -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Post Kegiatan <a href="{{ URL::to('kegiatan') }}" class="btn btn-xs btn-default"><i>Lihat Lengkap</i></a></h2>
        </div>

        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('khotbah') }}">
                <img class="img-responsive img-hover image-beranda" src="{{ url('resource/khotbah.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('khotbah') }}">Khotbah Jum'at</a>
            </h3>
            <p>Berisi informasi jadwal khotbah tiap ibadah shalat jum'at di masjid pangeran diponegoro semarang tiap tahunnya...</p>
        </div>

        @if($kajian[0] != null)
        @foreach($kajian as $index => $kaji)
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('kajian/'.$kaji->kategori.'/'.$kaji->id_kajian) }}">
                <img class="img-responsive img-hover image-beranda" style="background-image:url({{url('resource/kajian.png')}});" src="{{ url('foto/'.$kaji->gambar) }}" alt="{{ $kaji->gambar }}">
            </a>
            <h3>
                <a href="{{ URL::to('kajian/'.$kaji->kategori.'/'.$kaji->id_kajian) }}"><?php echo substr(strip_tags($kaji->judul), 0, 30) ?></a>
            </h3>
            <p><?php echo substr(strip_tags($kaji->isi), 0, 150) ?>...</p>
        </div>
        @endforeach
        @else
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('kajian') }}">
                <img class="img-responsive img-hover image-beranda" src="{{ url('resource/kajian.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('kajian') }}">Kajian Rutin</a>
            </h3>
            <p>Berisi kajian rutin berbagai tema kajian tiap minggu oleh para pengajar/ ustadz yang diadakan di masjid pangeran diponegoro semarang</p>
        </div>
        @endif

        @if($mahad[0] != null)
        @foreach($mahad as $index => $maha)
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('mahad/'.$maha->id_mahad) }}">
                <img class="img-responsive img-hover image-beranda" style="background-image:url({{url('resource/mahad.png')}});" src="{{ url('foto/'.$maha->gambar) }}" alt="{{ $maha->gambar }}">
            </a>
            <h3>
                <a href="{{ URL::to('mahad/'.$maha->id_mahad) }}"><?php echo substr(strip_tags($maha->judul), 0, 30) ?></a>
            </h3>
            <p><?php echo substr(strip_tags($maha->isi), 0, 150) ?>...</p>
        </div>
        @endforeach
        @else
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('mahad') }}">
                <img class="img-responsive img-hover image-beranda" src="{{ url('resource/mahad.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('mahad') }}">Mahad Al Madinah</a>
            </h3>
            <p>Berisi kegiatan mahad islam al madinah tiap harinya bagi santri mahasiswa dengan agenda belajar tahsin, bahasa arab dan yang lain</p>
        </div>
        @endif
    </div>

    <br><br>

    <!-- Post Berita -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Post Berita <a href="{{ URL::to('berita') }}" class="btn btn-xs btn-default"><i>Lihat Lengkap</i></a></h2>
        </div>
        @if($berita[0] != null)
        @foreach($berita as $index => $beri)
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('berita/'.$beri->kunci.'/'.$beri->id_berita) }}">
                <img class="img-responsive img-hover image-beranda" style="background-image:url({{url('resource/berita.png')}});" src="{{ url('foto/'.$beri->gambar) }}" alt="{{ $beri->gambar }}">
            </a>
            <h3>
                <a href="{{ URL::to('berita/'.$beri->kunci.'/'.$beri->id_berita) }}"><?php echo substr(strip_tags($beri->judul), 0, 30) ?></a>
            </h3>
            <p><?php echo substr(strip_tags($beri->isi), 0, 150) ?>...</p>
        </div>
        @endforeach
        @else
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('berita') }}">
                <img class="img-responsive img-hover image-beranda" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('berita') }}">Post Berita Kosong</a>
            </h3>
            <p>Berisi kumpulan berita terbaru tentang masjid pangeran diponegoro semarang</p>
        </div>
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('berita') }}">
                <img class="img-responsive img-hover image-beranda" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('berita') }}">Post Berita Kosong</a>
            </h3>
            <p>Berisi kumpulan berita terbaru tentang masjid pangeran diponegoro semarang</p>
        </div>
        <div class="col-sm-4 img-portfolio">
            <a href="{{ URL::to('berita') }}">
                <img class="img-responsive img-hover image-beranda" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
            <h3>
                <a href="{{ URL::to('berita') }}">Post Berita Kosong</a>
            </h3>
            <p>Berisi kumpulan berita terbaru tentang masjid pangeran diponegoro semarang</p>
        </div>
        @endif
    </div>

    <br><br>

    <!-- Galeri -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Kolom Galeri <a href="{{ URL::to('galerifoto') }}" class="btn btn-xs btn-default"><i>Lihat Lengkap</i></a></h2>
        </div>
        @if($galeri[0] != null)
        @foreach($galeri as $index => $gale)
        <div class="col-md-4 col-sm-6">
            <a href="{{ URL::to('galerifoto') }}">
                <img class="img-responsive img-portfolio img-hover image-beranda" src="{{url('galeri/'.$gale->gambar)}}" alt="{{ $gale->judul }}">
            </a>
            <h3>
                <?php echo substr(strip_tags($gale->judul), 0, 30) ?>
            </h3>
            <p><i>diunggah pada {{ $gale->created_at }}</i></p>
        </div>
        @endforeach
        @else
        <div class="col-sm-4">
            <a href="{{ URL::to('galerifoto') }}">
                <img class="img-responsive img-portfolio img-hover" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
        </div>
        <div class="col-sm-4">
            <a href="{{ URL::to('galerifoto') }}">
                <img class="img-responsive img-portfolio img-hover" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
        </div>
        <div class="col-sm-4">
            <a href="{{ URL::to('galerifoto') }}">
                <img class="img-responsive img-portfolio img-hover" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
        </div>
        @endif
    </div>
    <!-- /.row -->

    <br><br><br>

    <!-- Donasi -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Kolom Donasi <a href="{{ URL::to('donasi') }}" class="btn btn-xs btn-default"><i>Lihat Lengkap</i></a></h2>
        </div>
        <div class="col-sm-4">
            <p align="justify"><i>Kami dari Masjid Pangeran Diponegoro menerima donasi infaq berupa uang atau dalam bentuk lain, untuk lebih jelasnya silahkan buka <strong>Lihat Lengkap</strong> untuk prosedur donasi beserta laporan pemasukan dan pengeluaran dana oleh Masjid Pangeran Diponegoro Semarang...</i></p>
            <a class="btn btn-primary" href="{{ URL::to('donasi') }}"><i class="fa fa-angle-right">Lihat Lengkap </i></a>
            <br><br>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-primary text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Total Saldo tiap bulan </h3>
                </div>
                <div class="panel-body">
                    <span class="price"><sup>Rp</sup>{{ $donasi->saldo}},-</span>
                    <span class="period">bulan {{ $donasi->tanggal }}</span>
                </div>
                @if($donasiAll[0] != null)
                @foreach($donasiAll as $index => $dona)
                @if($index != 0)
                <ul class="list-group">
                    <li class="list-group-item"><strong>Rp {{ $dona->saldo}}</strong>,- <i>bulan {{ $dona->tanggal }}</i></li>
                </ul>
                @endif
                @endforeach
                @else
                <ul class="list-group">
                    <li class="list-group-item"><i>Tidak ada</i></li>
                    <li class="list-group-item"><i>Tidak ada</i></li>
                    <li class="list-group-item"><i>Tidak ada</i></li>
                </ul>
                @endif
            </div>
        </div>

        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Pemasukan tiap bulan</h3>
                </div>
                <div class="panel-body">
                    <span class="price"><sup>Rp</sup>{{ $donasi->masuk }},-</span>
                    <span class="period">bulan {{ $donasi->tanggal }}</span>
                </div>
                @if($donasiAll[0] != null)
                @foreach($donasiAll as $index => $dona)
                @if($index != 0)
                <ul class="list-group">
                    <li class="list-group-item"><strong>Rp {{ $dona->masuk }}</strong>,- <i>bulan {{ $dona->tanggal }}</i></li>
                </ul>
                @endif
                @endforeach
                @else
                <ul class="list-group">
                    <li class="list-group-item"><i>Tidak ada</i></li>
                    <li class="list-group-item"><i>Tidak ada</i></li>
                    <li class="list-group-item"><i>Tidak ada</i></li>
                </ul>
                @endif
            </div>
        </div>
    </div>
    <!-- /.row -->

    <br>

    <hr>

    <!-- Unduhan -->
    <div class="row">
        <div class="col-md-12">
            <div class="well col-md-4" style="background-color: #ffaaaa;">
                <div class="row">
                    <div class="col-md-6">
                        <p>Link berisi pertanyaan yang sering muncul</p>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-lg btn-default btn-block" href="{{ URL::to('faq') }}">FAQ</a>
                    </div>
                </div>
            </div>
            <span></span>
            <div class="well col-md-4" style="background-color: #ffeeaa;">
                <div class="row">
                    <div class="col-md-6">
                        <p>Link berisi berkas yang bisa diunduh</p>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-lg btn-default btn-block" href="{{ URL::to('unduhan') }}">Unduhan</a>
                    </div>
                </div>
            </div>
            <div class="well col-md-4" style="background-color: #ccffaa;">
                <div class="row">
                    <div class="col-md-6">
                        <p>Link berisi penyaluran pesan dan aspirasi</p>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-lg btn-default btn-block" href="{{ URL::to('profil') }}">Buku Tamu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop