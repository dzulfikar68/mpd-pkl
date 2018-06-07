<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Masjid Pangeran Diponegoro</title>

        <link rel="icon" href="{{ url('resource/dipo.jpg') }}">

        <!-- Bootstrap Core CSS -->
        <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('/assets/css/modern-business.css')}}" rel="stylesheet">

        <!--[if lte IE 9]>

<style>
/* IE9 and below specific CSS */

figure.figurefx::before, figure.figurefx::after{
display: none; /* hide pseudo elements, since legacy IE can't transition them */
}

</style>

<![endif]-->



        <!-- Custom Fonts -->
        <link href="{{url('/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('') }}">Masjid Pangeran Diponegoro</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ URL::to('profil') }}">Profil</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kegiatan <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::to('khotbah') }}">Khotbah Jumat</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('kajian') }}">Kajian Rutin</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('mahad') }}">Mahad Al Madinah</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ URL::to('berita') }}">Berita</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('galerifoto') }}">Galeri</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('donasi') }}">Donasi</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('faq') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('unduhan') }}">Unduhan</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        @yield("content")

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-sm-12">
                    <p><i>Copyright &copy; Masjid Pangeran Diponegoro - Semarang</i></p>
                    <a href="" class="go-top">Ke Atas</a>
                </div>
            </div>
        </footer>

        </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{url('/assets/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

    <script src="{{url('/assets/js/ultralb.js')}}"></script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.7&appId=1193877264006562";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Show or hide the sticky footer button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.go-top').fadeIn(200);
                } else {
                    $('.go-top').fadeOut(200);
                }
            });
            
            // Animate the scroll to top
            $('.go-top').click(function(event) {
                event.preventDefault();
                
                $('html, body').animate({scrollTop: 0}, 300);
            })
        });
    </script>

    </body>

</html>