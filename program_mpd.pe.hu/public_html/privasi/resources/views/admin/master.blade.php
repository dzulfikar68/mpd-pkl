
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>(admin) Masjid Pangeran Diponegoro</title>

        <link rel="icon" href="{{ url('resource/dipo.jpg') }}">

        <!-- Bootstrap Core CSS -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('assets/css/sb-admin.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{url('assets/cleditor/jquery.cleditor.css')}}" />

        <!-- Custom Fonts -->
        <link href="{{url('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('admin') }}">Admin MPD Semarang</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li>
                        <a href="{{ URL::to('') }}"  target="_blank">Lihat Web</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ URL::to('https://www.facebook.com/DIPOMUDA-623890651040050/') }}"  target="_blank">Grup <i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="{{ URL::to('https://twitter.com/intent/tweet?screen_name=MpdSemarang') }}"  target="_blank">Pos <i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ URL::to('//plus.google.com/u/0/117797755835697632589?prsrc=3') }}"  target="_blank">Akun <i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ action('LoginController@logout') }}"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="menu">
                            <a href="{{ URL::to('admin-pesan-all') }}"><i class="fa fa-fw fa-envelope"></i> Pesan Masuk</a>
                        </li>
                        <li class="menu">
                            <a href="{{ URL::to('admin-khotbah') }}""><i class="fa fa-fw fa-bullhorn"></i> Khotbah Jum'at </a>
                        </li>
                        <li class="menu">
                            <a href="javascript:;" data-toggle="collapse" data-target="#kajian"><i class="fa fa-fw fa-play"></i> Kajian Rutin <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="kajian" class="collapse">
                                <li>
                                    <a href="{{ action('admin\KajianController@index') }}">Semua Kajian</a>
                                </li>
                                <li>
                                    <a href="{{ action('admin\KajianController@create') }}">Tambah Kajian</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="javascript:;" data-toggle="collapse" data-target="#mahad"><i class="fa fa-fw fa-book"></i> Mahad Al Madinah <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="mahad" class="collapse">
                                <li>
                                    <a href="{{ action('admin\MahadController@index') }}">Semua Post</a>
                                </li>
                                <li>
                                    <a href="{{ action('admin\MahadController@create') }}">Tambah Post</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="javascript:;" data-toggle="collapse" data-target="#berita"><i class="fa fa-fw fa-list"></i> Berita <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="berita" class="collapse">
                                <li>
                                    <a href="{{ action('admin\BeritaController@index') }}">Semua Berita</a>
                                </li>
                                <li>
                                    <a href="{{ action('admin\BeritaController@create') }}">Tambah Berita</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="javascript:;" data-toggle="collapse" data-target="#galeri"><i class="fa fa-fw fa-camera"></i> Galeri <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="galeri" class="collapse">
                                <li>
                                    <a href="{{ action('admin\GaleriController@index') }}">Semua Foto</a>
                                </li>
                                <li>
                                    <a href="{{ action('admin\GaleriController@create') }}">Tambah Foto</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="javascript:;" data-toggle="collapse" data-target="#donasi"><i class="fa fa-fw fa-file"></i> Donasi <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="donasi" class="collapse">
                                <li>
                                    <a href="{{ URL::to('admin-donasi-all') }}">Semua Laporan</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin-donasi-adds') }}">Tambah Laporan</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('admin-donasi-addx') }}">Detail Laporan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="{{ URL::to('admin-faq') }}"><i class="fa fa-fw fa-comment"></i> FAQ </a>
                        </li>
                        <li class="menu">
                            <a href="{{ URL::to('admin-unduhan') }}"><i class="fa fa-fw fa-download"></i> Unduhan </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            @yield("content")


        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{url('assets/js/jquery.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>

        <script src="{{url('assets/cleditor/jquery.cleditor.min.js')}}"></script>
        <script>
            $(document).ready(function () { $("#form_isi").cleditor(); });
        </script>

        <!-- Morris Charts JavaScript -->
       
        <script type="text/javascript">
            /* Collapse filter when another filter clicked*/
           $('.menu').click(function(){
               $('.menu .collapse.in').collapse('hide');
           });
        </script>

    </body>

</html>