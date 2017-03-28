@extends("admin/master")

@section("content")

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">
                    FAQ <button type="button" class="btn btn-xs btn-default" href="{{ URL::to('faq/') }}">Petinjau</button>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('admin/') }}">Beranda </a>
                    </li>
                    <li class="active">
                        <i class="fa fa-comment"></i>
                        FAQ
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

        <div class="col-sm-12">

                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
                </div>
                <br>
                @endif

                @if(Session::has('destroy'))
                <div class="alert alert-success alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('destroy') }}</strong>
                </div>
                <br>
                @endif
                
                <h3>Lihat FAQ</h3>

                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($faqAll[0] != null)
                            @foreach($faqAll as $index => $faq)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$faq->q}}</td>
                                <td>{{$faq->a}}</td>
                                <td>
                                    <a type="submit" class="btn btn-sm btn-danger" href="{{ URL::to('admin-faq/'.$faq->id_faq) }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" style="text-align: center"><i>Tidak Ada Faq</i></td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>

                <hr>

                <br>
                
            </div>

            <div class="col-sm-9">
                
                <h3>Tambah FAQ</h3>
                
                <form role="form" method="post" action="{{action('admin\FaqController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br>

                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <input class="form-control" name="q">
                    </div>

                    <div class="form-group">
                        <label>Jawaban</label>
                        <textarea class="form-control" rows="3" name="a"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                
                </form>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@stop