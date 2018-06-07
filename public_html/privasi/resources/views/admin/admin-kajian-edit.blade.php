@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Edit Post <small>Kajian Rutin</small> <a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('kajian/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-play"></i>  <a href="{{ URL::to('admin-kajian-all/') }}">Kajian</a>
                    </li>
                    <li class="active">
                        Edit Post
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-9">

                <form role="form" method="post" action="{{ action('admin\KajianController@update', [$kajian->id_kajian]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <br>

                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" placeholder="masukkan judul {wajib}" name="judul" value="<?php echo $kajian->judul ?>">
                    </div>
                    
                    <fieldset disabled>
                        <div class="form-group">
                            <label>Upload Gambar</label>
                            <input type="file" name="gambar" value="{{$kajian->gambar}}">
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label>Kalimat Ajakan</label>
                        <textarea class="form-control" rows="2" name="ajakan" ><?php echo $kajian->ajakan ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" rows="20" name="isi" id="form_isi"><?php echo $kajian->isi ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Link Audio</label>
                        @if($kajian->audio != null)
                        <input class="form-control" placeholder="masukkan tautan embed soundcloud" name="audio" value="{{$kajian->audio}}">
                        <br>
                        <iframe class="embed-responsive-item" width="400" height="125" scrolling="no" frameborder="0"
                            src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fmpdsmg%2F{{$kajian->audio}}%2F&hide_cover=1&light=1"></iframe>
                        @else
                        <input class="form-control" placeholder="masukkan tautan embed soundcloud" name="audio" value="{{$kajian->audio}}">
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>Link Video</label>
                        @if($kajian->video != null)
                        <input class="form-control" placeholder="masukkan tautan embed youtube" name="video" value="{{$kajian->video}}">
                        <br>
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/{{$kajian->video}}" frameborder="0" allowfullscreen></iframe>
                        @else
                        <input class="form-control" placeholder="masukkan tautan embed youtube" name="video" value="{{$kajian->video}}">
                        @endif
                    </div>
                    
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
                    
                    <br>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop