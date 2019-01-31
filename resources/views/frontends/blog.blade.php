<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apotek Prima</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset ('assets/frontend/images/Money.png') }}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset ('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset ('assets/frontend/vendors/animate/animate.css') }}" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/vendors/camera-slider/camera.css') }}">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/frontend/vendors/owl_carousel/owl.carousel.css') }}" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/frontend/css/style.css') }}" media="all" />

    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/frontend/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<!-- <section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+5400 932</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>apotekprima@gmail.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/profile.php?id=100007428854904&ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/as_leather_accessories/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Top Header_Area -->

    <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <br>
                    <img src="{{ asset ('assets/frontend/images/lg.png') }}" width="70" height="70" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <div class="top_bar_login ml-auto">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/index">Beranda</a></li>
                        <li><a href="/produk">Produk</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                        <li><a href="/blog">Artikel</a></li>
                        <li><a href="/contact">Kontak</a></li>
                       </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- End Header_Area -->

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Artikel</h2>
        <ol class="breadcrumb">
            <li><a href="/index">Beranda</a></li>
            <li><a href="/blog" class="active">Artikel</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

<!-- blog-2 area -->
        <section class="blog_tow_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Artikel</h2>
            </div>
            <br>
            <br>    
           <div class="row blog_tow_row">
                 @foreach($artikels as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <div class="about_image">
                            <img src="{{ asset ('assets/img/artikel/' .$data->gambar. '' ) }}" width="400" height="300">
                        <div class="renovation_content">
                            <a class="tittle" href="/artikels/single/{{$data->slug}}">{{$data->judul}}</a>
                            <div class="date_comment">
                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                        {{ $data->created_at->diffForHumans() }}</a>
                            </div>
                            <p>{!!str_limit($data->deskripsi,500)!!}
                                <br>
                            <a href="/artikels/single/{{$data->slug}}" class="single-blog-item">Read More</a></p>
                        </div>
                    </div>
                </div>
           </div>
        @endforeach
    </div>
    {{ $artikels->links() }}
</section>
    <!-- End Our Latest Blog Area -->

    <!-- End Our Latest Blog Area -->

    <!-- End blog-2 area -->

                            
    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Apotek Prima</h2>
                    <p>Apotek merupakan suatu tempat tertentu untuk melakukan pekerjaan kefarmasian yang dikelola oleh Apoteker sesuai standar,etika dan penyaluran obat obatan kepada masyarakat.</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100007428854904&ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/as_leather_accessories/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Tautan</h2>
                    <ul class="quick_link">
                        <li><a href="/index"><i class="fa fa-chevron-right"></i>Beranda</a></li>
                        <li><a href="/produk"><i class="fa fa-chevron-right"></i>Produk</a></li>
                        <li><a href="/galeri"><i class="fa fa-chevron-right"></i>Galeri</a></li>
                        <li><a href="/blog"><i class="fa fa-chevron-right"></i>Artikel</a></li>
                        <li><a href="/contact"><i class="fa fa-chevron-right"></i>Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Obat</h2>
                    <p>Obat adalah semua bahan tunggal/campuran yang dipergunakan oleh semua makhluk untuk bagian dalam maupun luar, guna mencegah, meringankan ataupun menyembuhkan penyakit.</p>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Kontak</h2>
                    <address>
                        <p>Punya pertanyaan, komentar atau hanya ingin menyapa:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>apotekprima@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+5400 932</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Jln.Raya Sukamenak No.153B</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2017 All rights reserved. Designed by apotekprima.</a>
        </div>
    </footer>
   <!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c32a69e7a79fc1bddf38374/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- Animate JS -->
    <script src="{{ asset('assets/frontend/vendors/animate/wow.min.js') }}"></script>
    <!-- Camera Slider -->
    <script src="{{ asset('assets/frontend/vendors/camera-slider/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/camera-slider/camera.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Progress JS -->
    <script src="{{ asset('assets/frontend/vendors/Counter-Up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendors/Counter-Up/waypoints.min.js') }}"></script>
    <!-- Owlcarousel JS -->
    <script src="{{ asset('assets/frontend/vendors/owl_carousel/owl.carousel.min.js') }}"></script>
    <!-- Stellar JS -->
    <script src="{{ asset('assets/frontend/vendors/stellar/jquery.stellar.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/frontend/js/theme.js') }}"></script>
</body>
</html>
