@extends("master")

@section("content")

<!-- Kegiatan -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Unduhan
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="active">Unduhan</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <p>Berikut adalah berkas yang dapat diunduh tentang <strong>berkas-berkas</strong> kegiatan yang ada di Masjid Pangeran Diponegoro: </p><br>

    @foreach($unduhan as $index => $undu)
    <iframe class="embed-responsive-item" width="100%" height="500" frameborder="no" src="https://drive.google.com/embeddedfolderview?id={{$undu->link}}#list" width="700" height="500" frameborder="0"></iframe>
    @endforeach

    @stop