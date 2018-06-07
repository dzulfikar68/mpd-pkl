@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Edit Post <small>Mahad Al Madinah</small><a type="submit" class="btn btn-xs btn-default" href="{{ URL::to('mahad/') }}" >Petinjau</a>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li>
                        <i class="fa fa-book"></i>  <a href="{{ URL::to('admin-mahad-all/') }}">Mahad</a>
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

                <form role="form" method="post" action="{{ action('admin\MahadController@update', [$mahad->id_mahad]) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <br>

<!--                    <h3>Tambah Post Mahad</h3>-->

                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" placeholder="masukkan judul" placeholder="masukkan judul {wajib}" name="judul" value="<?php echo $mahad->judul ?>">
                    </div>

                    <fieldset disabled>
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" name="gambar" value="{{$mahad->gambar}}">
                    </div>
                    </fieldset>

                    <div class="form-group">
                        <label>Kalimat Ajakan</label>
                        <textarea class="form-control" rows="3" name="ajakan" ><?php echo $mahad->ajakan ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Isi</label>
                        <textarea class="form-control" rows="28" name="isi" id="form_isi"><?php echo $mahad->isi ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Link Audio</label>
                        @if($mahad->audio != null)
                        <input class="form-control" placeholder="masukkan tautan embed soundcloud" name="audio" value="{{$mahad->audio}}">
                        <br>
                        <iframe class="embed-responsive-item" width="400" height="125" scrolling="no" frameborder="0"
                            src="https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fmpdsmg%2F{{$mahad->audio}}%2F&hide_cover=1&light=1"></iframe>
                        @else
                        <input class="form-control" placeholder="masukkan tautan embed soundcloud" name="audio" value="{{$mahad->audio}}">
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Link Video</label>
                        @if($mahad->video != null)
                        <input class="form-control" placeholder="masukkan tautan embed youtube" name="video" value="{{$mahad->video}}">
                        <br>
                        <iframe width="400" height="250" src="https://www.youtube.com/embed/{{$mahad->video}}" frameborder="0" allowfullscreen></iframe>
                        @else
                        <input class="form-control" placeholder="masukkan tautan embed youtube" name="video" value="{{$mahad->video}}">
                        @endif
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