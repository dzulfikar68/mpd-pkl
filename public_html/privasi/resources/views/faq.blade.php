@extends("master")

@section("content")

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">FAQ (Frequently asked questions)</h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="active">FAQ</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- FAQ -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-group" id="accordion">

                <p>Berikut adalah <strong>pertanyaan-pertanyaan</strong> yang sering muncul mengenai topik yang berhubungan dengan Masjid Pangeran Diponegoro :</p><br>
                
                @if($faqAll[0] != null)
                @foreach($faqAll as $index => $faq)

                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$nomor[$index]}}"><strong>{{$index+1}}. {{$faq->q}}</strong></a>
                        </h4>
                    </div>
                    <div id="collapse{{$nomor[$index]}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{$faq->a}}
                        </div>
                    </div>

                </div>

                @endforeach
                @else
                    <p style="text-align: center"><i>Tidak Ada Faq</i></p>
                @endif

            </div>
            <!-- /.panel-group -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    @stop