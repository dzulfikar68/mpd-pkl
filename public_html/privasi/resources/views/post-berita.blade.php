@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">
    @foreach($beritaShow as $index => $berita)

    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">{{$berita->judul}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('/') }}">Home</a>
                </li>
                <li><a href="{{ URL::to('berita/') }}">Berita</a>
                </li>
                <li class="active">{{$berita->kunci}}</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-sm-8">

            <!-- Blog Post -->
            <hr>

            <div class="row">
                
                <div class="col-sm-5">
                 Date/Time 
                <p><i class="fa fa-clock-o"></i> {{$berita->created_at}}</p>
                </div>
                    
                <div class="col-sm-7">
                 Kata Kunci 
                <p><i class="fa fa-link"></i> <a href="{{ URL::to('berita/'.$berita->kunci) }}"> {{$berita->kunci}}</a></p>
                </div>

            </div>
            
            <hr>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <!-- Preview Image -->
                    <!-- thanks for: sekolahkoding.com -->
                    @if($berita->gambar != null)
                    <img class="img-responsive post-image" id="img-post" style="background-position: center; background-size: cover; height: 50%;" src="{{url('foto/'.$berita->gambar)}}" alt="$berita->gambar">
                    @else
                    <img class="img-responsive post-image" id="img-post" style="background-position: center; background-size: cover; height: 50%;" src="{{url('resource/berita.png')}}" alt="Default">
                    @endif

                </div>
            </div>
            
            <hr>

            <!-- Bagian Ajakan -->
            @if($berita->ajakan != null)
            <p class="lead" align="center">
                بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ
                <br>
                {{$berita->ajakan}}
            </p>

            <!-- Bagian Isi -->
            <?php echo $berita->isi; ?>
            @else
            <p class="lead" align="center">
                بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ
            </p>
            <?php echo $berita->isi; ?>
            @endif

            <hr>
            
            <!-- Preview Audio -->
            @if($berita->audio != null)
            <div>
                <iframe class="embed-responsive-item" width="750" height="125" scrolling="no" frameborder="0"
                    src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fmpdsmg%2F{{$berita->audio}}%2F&hide_cover=1&light=1"></iframe>
            </div>
            @else
            <div class="alert alert-info" role="alert" align="center"><i>Tidak ada audio</i></div>
            @endif
            
            <hr>
            
            <!-- Preview Video -->
            @if($berita->video != null)
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$berita->video}}" frameborder="0" allowfullscreen></iframe>
            </div>
            @else
            <div class="alert alert-info" role="alert" align="center"><i>Tidak ada video</i></div>
            @endif
            
            <hr>
            
            @endforeach

            <!-- Kata Kunci -->

            <strong>Pilih kata kunci lain: </strong>
            @if($beritaKunci[0] != null)
            @foreach($beritaKunci as $index => $berita)
            <!-- Kata Kunci -->
                <i><a href="{{ URL::to('berita/'.$berita->kunci) }}">{{$berita->kunci}}</a>, </i>
            @endforeach

            @else
                <i>Tidak ditemukan kata kunci</i>
            @endif

            <hr>

            <!-- Comments-->
            <div class="col-md-5 row">

            <a href="//plus.google.com/u/0/117797755835697632589?prsrc=3" target="_blank"
            rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
            <span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:0px;">masjid pangeran diponegoro</span><span style="display:inline-block;vertical-align:top;margin-right:13px; margin-top:0px;">on</span>
            <img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/>
            </a>

            </div>

            <div class="col-md-1 row">
                    <i>|</i>
            </div>

            <div class="col-md-5 row" style="margin-left: 10px;">
            
            <a href="https://twitter.com/intent/tweet?screen_name=MpdSemarang" class="twitter-mention-button" data-show-count="false">Tweet to @MpdSemarang</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

            </div>

            <div class="fb-comments" data-href="https://developers.facebook.com/tools/comments/1193877264006562/approved/descending/berita/{{$berita->kunci}}/{{$berita->id_berita}}" data-width="100%" data-numposts="5">
                
            </div>

            <hr>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-sm-4">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Cari Berita</h4>
                <form role="form" method="get" action="{{action('BeritaController@cari')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cari">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Kategori Kegiatan</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ URL::to('khotbah/') }}">Khotbah Jumat</a>
                            </li>
                            <li><a href="{{ URL::to('kajian/') }}">Kajian Rutin</a>
                            </li>
                            <li><a href="{{ URL::to('mahad/') }}">Mahad Al Madinah</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Kategori Kajian</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ URL::to('kajian/Tauhid') }}">Tauhid/ Akidah</a>
                            </li>
                            <li><a href="{{ URL::to('kajian/Fiqih') }}">Fiqih/ Ibadah</a>
                            </li>
                            <li><a href="{{ URL::to('kajian/Akhlak') }}">Akhlak/ Adab</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><a href="{{ URL::to('kajian/Tafsir') }}">Tafsir/ Kitab</a>
                            </li>
                            <li><a href="{{ URL::to('kajian/Sirah') }}">Sirah/ Sejarah</a>
                            </li>
                            <li><a href="{{ URL::to('kajian/Tematik') }}">Tematik/ Umum</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            
            <!-- Side Widget Well -->
            <div class="well">
                <h4>Post Berita Terkait</h4>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-unstyled">
                            @foreach($beritaKait as $index => $kait)
                            <li><a href="{{ URL::to('berita/'.$kait->kunci.'/'.$kait->id_berita) }}">{{$kait->judul}}</a>,
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <hr>

            <div style="TEXT-ALIGN:center;"><A href="http://www.al-habib.info/islamic-calendar/"  style="FONT-SIZE: 8px;COLOR:red;text-decoration:none;"><img style="border:0px;WIDTH:120px;" alt="Islamic Calendar Widgets by Alhabib" border="0" src="http://js.al-habib.info/phpimg2.php?ic=red&it=rect&ad=-7"></A></div>

            <br>

            <div style="width:100%;margin:0 auto;text-align:center"><a href="http://www.al-habib.info/islamic-widget/prayer-times.htm"><img width="350" src="http://www.al-habib.info/islamic-widget/muslim-prayer.php?&mpt_lat=-7.0548603&mpt_lng=110.43243269999994&mpt_tz=Asia%2FJakarta&mpt_sz=-20&mpt_iz=-18&mpt_loc=Semarang&mpt_w=350&mpt_dp=d&mpt_pre=1&mpt_cn=1&mpt_fq=Shafi&mpt_lang=Indonesia&mpt_thm=red" style="border:0" alt="Waktu sholat untuk Semarang. Widget Jadwal Sholat oleh Alhabib." /></a></div>

            <br>

            <!-- Twitter -->
            <a class="twitter-timeline" href="https://twitter.com/MpdSemarang">Tweets by MpdSemarang</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>

    </div>
    <!-- /.row -->

    @stop