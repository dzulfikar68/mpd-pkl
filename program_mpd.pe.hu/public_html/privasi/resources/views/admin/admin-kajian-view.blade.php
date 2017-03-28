@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Lihat Post <small>Kajian Rutin</small> <a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('kajian/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-play"></i>  <a href="{{ URL::to('admin-kajian-all/') }}">Kajian</a>
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

                    @foreach($kajianShow as $index => $kajian)
                    
                    <div class="form-group">
                        <label>Judul</label>
                        <p class="form-control-static">{{$kajian->judul}}</p>
                    </div><hr>
                    
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        @if($kajian->gambar != null)
                        <img class="img-responsive" src="{{url('foto/'.$kajian->gambar)}}" alt="">
                        @else
                        <p class="form-control-static"><i>Tidak ada gambar</i></p>
                        @endif
                    </div><hr>

                    <div class="form-group">
                        <label>Kalimat Ajakan</label>
                        @if($kajian->ajakan != null)
                        <p class="form-control-static"><?php echo $kajian->ajakan ?></p>
                        @else
                        <p class="form-control-static"><i>Tidak ada</i></p>
                        @endif
                    </div><hr>

                    <div class="form-group">
                        <label>Isi</label>
                        @if($kajian->isi != null)
                        <p class="form-control-static"><?php echo $kajian->isi ?></p>
                        @else
                        <p class="form-control-static"><i>Tidak ada</i></p>
                        @endif
                    </div><hr>
                
                    <div class="form-group">
                        <label>Link Audio</label>
                        <br>
                        @if($kajian->audio != null)
                        <iframe class="embed-responsive-item" width="400" height="125" scrolling="no" frameborder="0"
                            src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fmpdsmg%2F{{$kajian->audio}}%2F&hide_cover=1&light=1"></iframe>
                        @else
                        <p class="form-control-static"><i>Tidak ada audio</i></p>
                        @endif
                    </div><hr>
                    
                    <div class="form-group">
                        <label>Link Video</label>
                        <br>
                        @if($kajian->video != null)
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/{{$kajian->video}}" frameborder="0" allowfullscreen></iframe>
                        @else
                        <p class="form-control-static"><i>Tidak ada video</i></p>
                        @endif
                    </div><hr>

                    <fieldset disabled>
                    <div class="form-group">
                        <div class="row col-lg-12">
                            <label>Kategori</label>
                        </div>
                        <div class="row col-lg-2">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="kategori" value="Tauhid" 
                                    @if ($kajian->kategori == 'Tauhid') {{'checked'}}
                                    @endif
                                    >Tauhid
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="kategori" value="Fiqih"
                                    @if ($kajian->kategori == 'Fiqih') {{'checked'}}
                                    @endif
                                    >Fiqih
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="kategori" value="Akhlak"
                                    @if ($kajian->kategori == 'Akhlak') {{'checked'}}
                                    @endif
                                    >Akhlak
                                </label>
                            </div>
                        </div>
                        <div class="row col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="kategori" value="Tafsir"
                                    @if ($kajian->kategori == 'Tafsir') {{'checked'}}
                                    @endif
                                    >Tafsir
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="kategori" value="Sirah"
                                    @if ($kajian->kategori == 'Sirah') {{'checked'}}
                                    @endif
                                    >Sirah
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="kategori" value="Tematik"
                                    @if ($kajian->kategori == 'Tematik') {{'checked'}}
                                    @endif
                                    >Tematik
                                </label>
                            </div>
                        </div>
                    </div>
                    </fieldset>
                    
                    <br>

                    <a type="submit" class="btn btn-primary" href="{{ URL::to('admin-kajian-edit/'.$kajian->id_kajian) }}" > Edit</a>
                    <a type="submit" class="btn btn-danger" href="{{ URL::to('admin-kajian-delete/'.$kajian->id_kajian) }}" > Hapus</a>
                    <a type="submit" class="btn btn-warning" href="{{ URL::to('admin-kajian-all/') }}" > Keluar</a>
                    
                    @endforeach
                
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop