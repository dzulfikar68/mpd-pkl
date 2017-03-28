@extends("master")

@section("content")

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Profil </h1>
            <ol class="breadcrumb">
                <li><a href="{{ URL::to('') }}">Home</a>
                </li>
                <li class="active">Profil</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    @if(Session::has('message'))
    <div class="alert alert-success alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-info-circle"></i>  <strong>{{ Session::get('message') }}</strong>
    </div>
    @endif

    <div class="alert alert-success alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-info-circle"></i>  Pemberitahuan, untuk mengisi <strong>Buku Tamu</strong> ada di bawah halaman
    </div>

    <!-- Pengenalan -->
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive img-hover" style="background-color: #cccccc; border: 2px; border-radius: 4px;" src="{{ url('resource/profil.png') }}" alt="tentang.png">
        </div>
        <div class="col-md-6">
            <h2>Masjid Pangeran Diponegoro</h2>
            <p align="justify">Masjid Pangeran Diponegoro (MPD) adalah Masjid yang didirian oleh yayasan sultan agung trenggono semarang yang terletak di daerah tembalang, kota semarang. Didirikannya MPD bertujuan untuk menjalankan kegiatan syiar keislaman. Kegiatan yang dilaksanakan oleh MPD yaitu Kajian Rutin tiap minggu dan kegiatan bermanfaat lainnya</p>
        </div>
    </div>
    <!-- /.row -->

    <br><br><br>

    <!-- Alamat -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Alamat</h2>
        </div>
        <!-- Map Column -->
        <div class="col-sm-8">
            <!-- Embedded Google Map -->
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.616711637773!2d110.42977631392846!3d-7.054243471085304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c0186ffa981%3A0xc630de323aeed4ae!2sMasjid+Pangeran+Diponegoro!5e0!3m2!1sid!2sid!4v1473778607384"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-sm-4">
            <h3>Kontak</h3>
            <i>
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
            </i>
        </div>

    </div>
    <!-- /.row -->

    <br><br><br>

    <!-- Buku Tamu -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Buku Tamu</h2>
        </div>
        <div class="col-sm-8">
            <form name="sentMessage" id="contactForm" novalidate role="form" method="post" action="{{action('PesanController@store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Nomor Telepon:</label>
                        <input type="tel" class="form-control" name="nope" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Alamat Email:</label>
                        <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Pesan:</label>
                        <textarea rows="10" cols="100" class="form-control" name="isi" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>

    </div>
    <!-- /.row -->

    <br><br><br>

    <!-- Link Terkait -->
    <div class="row">
        <div class="col-sm-12">
            <h2 class="page-header">Link Terkait</h2>
        </div>
     
        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="https://www.facebook.com/DIPOMUDA-623890651040050/" target="_blank">
                <img class="img-responsive customer-img" src="{{ url('resource/dipo.jpg') }}" alt="">
            </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="http://nurussunnah.com/" target="_blank">
                <img class="img-responsive customer-img" src="{{ url('resource/ns.png') }}" alt="">
            </a>
        </div>
        
        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="http://majelis-albarokah.com/" target="_blank">
                <img class="img-responsive customer-img" src="{{ url('resource/barokah.jpg') }}" alt="">
            </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="http://sdipdiponegoro.blogspot.co.id/" target="_blank">
                <img class="img-responsive customer-img" src="{{ url('resource/sd.jpg') }}" alt="">
            </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="https://twitter.com/MpdSemarang" target="_blank">
                <img class="img-responsive customer-img" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6">
            <a href="https://plus.google.com/u/0/117797755835697632589" target="_blank">
                <img class="img-responsive customer-img" src="{{ url('resource/noimage.png') }}" alt="">
            </a>
        </div>
     
    </div>
    <!-- /.row -->

    @stop