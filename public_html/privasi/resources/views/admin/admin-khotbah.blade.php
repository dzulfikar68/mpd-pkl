@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    Khotbah Jum'at <button type="button" class="btn btn-xs btn-default" href="{{ URL::to('khotbah/') }}">Petinjau</button>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-bullhorn"></i>
                        Khotbah
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-sm-7">
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
                </div>
                @endif

                <br>

                <form role="form" method="post" enctype="multipart/form-data" action="{{action('admin\KhotbahController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Unggah PDF</label>
                        <input type="file" name="pdf">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

                <hr>

                <label>Tampilan PDF</label>
                @foreach($khotbah as $index => $khot)
                <iframe src="{{ url('pdf/'.$khot->pdf) }}" width="100%" height="900">
                    <a href="{{ url('pdf/'.$khot->pdf) }}">Download PDF</a>
                </iframe>
                @endforeach

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop