@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Lihat Post <small>Berita</small> <a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('berita/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-list"></i>  <a href="{{ URL::to('admin-berita-all/') }}">Berita</a>
                    </li>
                    <li class="active">
                        Lihat Post
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-9">
                
                    <br>
                
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    @foreach($beritaShow as $index => $berita)
                    
                    <div class="form-group">
                        <label>Judul</label>
                        <p class="form-control-static">{{$berita->judul}}</p>
                    </div><hr>
                    
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        @if($berita->gambar != null)
                        <img class="img-responsive" src="{{url('foto/'.$berita->gambar)}}" alt="">
                        @else
                        <p class="form-control-static"><i>Tidak ada gambar</i></p>
                        @endif
                    </div><hr>

                    <div class="form-group">
                        <label>Kalimat Ajakan</label>
                        @if($berita->ajakan != null)
                        <p class="form-control-static"><?php echo $berita->ajakan ?></p>
                        @else
                        <p class="form-control-static"><i>Tidak ada</i></p>
                        @endif
                    </div><hr>

                    <div class="form-group">
                        <label>Isi</label>
                        @if($berita->isi != null)
                        <p class="form-control-static"><?php echo $berita->isi ?></p>
                        @else
                        <p class="form-control-static"><i>Tidak ada</i></p>
                        @endif
                    </div><hr>
                
                    <div class="form-group">
                        <label>Link Audio</label>
                        <br>
                        @if($berita->audio != null)
                        <iframe class="embed-responsive-item" width="400" height="125" scrolling="no" frameborder="0"
                            src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fmpdsmg%2F{{$berita->audio}}%2F&hide_cover=1&light=1"></iframe>
                        @else
                        <p class="form-control-static"><i>Tidak ada audio</i></p>
                        @endif
                    </div><hr>
                    
                    <div class="form-group">
                        <label>Link Video</label>
                        <br>
                        @if($berita->video != null)
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/{{$berita->video}}" frameborder="0" allowfullscreen></iframe>
                        @else
                        <p class="form-control-static"><i>Tidak ada video</i></p>
                        @endif
                    </div><hr>

                    <div class="form-group">
                        <label>Kata Kunci</label>
                        @if($berita->kunci != null)
                        <p class="form-control-static">{{$berita->kunci}}</p>
                        @else
                        <p class="form-control-static"><i>Tidak ada</i></p>
                        @endif
                    </div>
                    
                    <br>

                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-berita-edit/'.$berita->id_berita) }}" > Edit</a>
                    <a type="submit" class="btn btn-danger" href="{{ URL::to('admin-berita-delete/'.$berita->id_berita) }}" > Hapus</a>
                    <a type="submit" class="btn btn-warning" href="{{ URL::to('admin-berita-all/') }}" > Keluar</a>
                    
                    @endforeach
                
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop