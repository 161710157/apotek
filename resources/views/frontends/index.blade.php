<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apotek Prima</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset ('assets/frontend/images/preloader.jpg') }}" type="image/x-icon" />
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

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js') }}"></script>
    <script src="js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	 <!--<section class="top_header_area">
        <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="tel:+5400 932"><i class="fa fa-phone"></i>+5400 932</a></li>

                <li><a href="#"><i class="fa fa-envelope-o"></i>apotekprima@gmail.com</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/profile.php?id=100007428854904&ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/as_leather_accessories/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </section> -->
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
                    <img src="{{ asset ('assets/frontend/images/lg.png') }}" width="60" height="60" alt=""></a>
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

    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="{{ asset ('assets/frontend/images/apoteker.jpg') }}" data-src="{{ asset ('assets/frontend/images/apoteker.jpg') }}">
                <div class="camera_caption">
                   <div class="container">

                   </div>
                </div>
            </div>
            <div data-thumb="{{ asset ('assets/frontend/images/kapsul.jpg') }}" data-src="{{ asset ('assets/frontend/images/kapsul.jpg') }}">
                <div class="camera_caption">
                   <div class="container">

                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- Professional Builde -->
    
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Tentang</h2>
            </div>
                    <div class="col-md-5 col-sm-6 about_client">
                    <img src="{{ asset ('assets/frontend/images/teacher_3.jpg') }}" alt="">
                </div>
                <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>Siapa Saya ?...</h2>
                    </div>
                    <p>Pengrajin Dompet berbahan kulit asal Cibaduyut.Produk yang terbatas di dalam komunitas pecinta sepeda motor,kini mampu menembus pesanan seperti Singapura, Malaysia, Brunei Darussalaam dan Australia.
                    Agung Ghani pengrajin aksesoris berbahan kulit asal Cibaduyut kota Bandung yang berlatar belakang pendidikan sekolah menengah kejuruan jurusan listrik.Namun ia mengaku tak hanya bergantung pada keahliannya itu untuk mencari penghidupan.</p>
                    <a href="/contact" class="button_all">Kontak</a>
                </div>

                <div class="col-md-5 col-sm-6 about_client">
                    <img src="{{ asset ('assets/frontend/images/teacher_2.jpg') }}" alt="">
                </div>
                  <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                    <p>Pengrajin Dompet berbahan kulit asal sukamenak.Produk yang terbatas di dalam komunitas pecinta sepeda motor,kini mampu menembus pesanan seperti Singapura, Malaysia, Brunei Darussalaam dan Australia.
                    Agung Ghani pengrajin aksesoris berbahan kulit asal rancamanyar kota Bandung yang berlatar belakang pendidikan sekolah menengah kejuruan jurusan listrik.Namun ia mengaku tak hanya bergantung pada keahliannya itu untuk mencari penghidupan.</p>

                 </div>
                </div>
              </div>
            </section>
            <!-- End About Us Area -->

    <!-- What ew offer Area -->
    
    <!-- End What ew offer Area -->

    <!-- Our Features Area -->
    
    <!-- End Our Features Area -->

    <!-- Our Services Area -->
    <!--@php
$obats =App\Obat::where('status','=',1)->get();
$kategoris =App\Kategori::all();
@endphp
    <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Produk</h2>
                </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_filter">
                    <ul>
                        <li data-filter="*" class="active"><a href="{{url('/index')}}"> All Category</a></li>
                    @foreach($kategoris as $data)
                        <li data-filter=".painting{{$data->id}}"><a href="{{url('/obat_kategori',$data->id)}}">{{$data->kategori}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="portfolio_item">
                   <div class="grid-sizer"></div>
                   @foreach($obats as $data)
                    <div class="single_facilities col-xs-4 p0 painting{{$data->kategoris->id}}">
                       <div class="single_facilities_inner">
                          	<div class="about_image"><img src="{{ asset ('assets/img/fotoobat/' .$data->gambar. '' ) }}" width="370" height="370"></div><br>
                            <div class="gallery_hover">
                                <a href="/produks/singleproduk/{{$data->slug}}" class="single-blog-item">
                                  <br>
                                  <br>
                                  <br>
                                  <h4>Detail Produk</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

      <!--  @php
$galeris =App\Galeri::paginate(3);
@endphp
<style type="text/css">
    * {margin: 0;padding:0}
body {background: #FFF}
h1 {color: #aaa;margin: 10px}
.carousel-container {
  padding: 0;
  margin: 1em auto;
  display: inline-block;
  max-width: 100%;
  width: 400px;
  height: 300px;
  position: relative;
  list-style-type: none;
}
.carousel-container .carousel-content {
  height: 300px;
  overflow: hidden;
  background: rgba(0,0,0,0.9);
  position: absolute;
  top: 0;
  box-shadow: 0 5px 5px -5px #333;
  padding: 0;
  text-align: center;
  line-height: 296px;
}
.carousel-container .carousel-content img {
  opacity: 0;
  padding: 0;
  width: auto;
  height: auto;
  max-height: 300px;
  max-width: 400px;
  vertical-align: middle;
  -webkit-animation-name: ziim;
  -webkit-animation-duration: 0.6s;
  animation-name: ziim;
  animation-duration: 0.6s;
}
@-webkit-keyframes ziim {
  from {-webkit-transform:scale(1)} 
  to {-webkit-transform:scale(0)}
}
@keyframes ziim {
  from {transform:scale(1)} 
  to {transform:scale(0)}
}
.carousel-container .carousel-toggle:checked ~ .carousel-content,.carousel-container .carousel-toggle.active ~ .carousel-content {
  height: 100%;
  width: 100%;
}
.carousel-container .carousel-toggle:checked ~ .carousel-content img,.carousel-container .carousel-toggle.active ~ .carousel-content img {
  opacity: 1;
}
.carousel-fullscreen {
  position: absolute;
  bottom: 0;
  right: 0;
  margin: 0 4px 4px 0;
  width: 27px;
  height: 27px;
  cursor: pointer;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAQAAAAn3TzeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAA/SURBVHjaYvjPQA5kGCHaUEApQylDKZrY4NEG5UG1YZUbetpKCcJBoG04R8DQyAGjJRfDf4b/DAAAAAD//wMAswEnryWu8FcAAAAASUVORK5CYII=') no-repeat center center;
}
.carouselFullScreen:checked,.carouselFullScreen.active {
  display: block;
  height: 100%;
}
.carouselFullScreen:checked+.carousel-container,.carouselFullScreen.active+.carousel-container {
  margin: 0;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 9999;  
}
.carouselFullScreen:checked+.carousel-container .carousel-toggle:checked ~.carousel-content >li,.carouselFullScreen.active+.carousel-container .carousel-toggle:checked ~.carousel-content >li {
  height: 100%;
  line-height: 99vh;
}
.carouselFullScreen:checked+.carousel-container .carousel-fullscreen,.carouselFullScreen.active+.carousel-container .carousel-fullscreen {
  width: 54px;
  height: 54px;
  background: #000 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAQAAAAmTKJWAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD+SURBVHja7Jc9CoQwEIW9gkdJYyFoIeiFvIaH0VLB0sLGI3iE1DbhbRciGDJrltnFHV+Zpx9I3vwkSPiUCExgAvsH2A7tUY/Sukr0Xt9Ohx3wPQtq66qxeH0HHWa8H1nRWFeD1eszdJiOhulPwKi/8RZMY8PsqIOyLoXudLad3rsB29CicqSQWlcKdTprscXBJuTkHOWY4mAjMjIswxgHm1GRYRXmn4eZy1yF5ObO3ClXbq5CcnP3RrkaLnMVkpu7gQ4rLnMVkpu7Qprnk2GsF4T16rOGmrVcPbfqf6l5so4FrAMP6yjHOqQyjN+siwXrysS6DEqnFpjABEbRawACMWGE7CJdswAAAABJRU5ErkJggg==') no-repeat center center;
}
.carouselFullScreen:checked+.carousel-container img,.carouselFullScreen.active+.carousel-container img {
  width: auto;
  height: 100%;
  max-height: 100vh;
  max-width: 100vw;
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}
@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}
input[type=checkbox].carouselFullScreen,input[type=checkbox].carousel-toggle {
  visibility: hidden;  
}
</style>

    
<div style="text-align: center">
            <div class="tittle wow fadeInUp">
                <h2>GALERI</h2>
            </div>
            <br>
<?php $no=1; ?>
@foreach($galeris as $data)
<?php $no++; ?>
<input id="{{$no}}" type="checkbox" class="carouselFullScreen" />
    <ul class="carousel-container">
        <li>
            <input type="checkbox" checked="checked" class="carousel-toggle" />
            <ul class="carousel-content">
                <label for="{{$no}}" class="carousel-fullscreen"></label>
                <li><img src="{{ asset ('assets/img/fotogalery/' .$data->gambar. '' ) }}" /></li>
            </ul>
        </li>
</ul>
           @endforeach
           
        </section>
    </div>
</div>
<center>
    <br>
    <br>
    <br>
{{ $galeris->links() }} </center>

          <!-- End Our Featured Works Area -->

   <!-- blog-2 area -->
<!--@php
$artikels =App\Artikel::paginate(3);
$kategoriarikels =App\Kategoriartikel::all();

@endphp
       <section class="blog_tow_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ARTIKEL</h2>
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
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                {{ $data->created_at->diffForHumans() }}</a>
                            </div>
                            <p>
                                <br>
                            <a href="/artikels/single/{{$data->slug}}" class="single-blog-item"></a></p>
                        </div>
                    </div>
                </div>
           </div>
        @endforeach
    </div>
</section>
    <!-- End Our Latest Blog Area -->
    {{ $artikels->links() }} </center>

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
            Copyright 2018 All rights reserved. Designed by APOTEK.</a>
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
<!--End of Tawk.to Script-->
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="{{ asset ('assets/frontend/js/jquery-1.12.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset ('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- Animate JS -->
    <script src="{{ asset ('assets/frontend/vendors/animate/wow.min.js') }}"></script>
    <!-- Camera Slider -->
    <script src="{{ asset ('assets/frontend/vendors/camera-slider/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset ('assets/frontend/vendors/camera-slider/camera.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset ('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset ('assets/frontend/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Progress JS -->
    <script src="{{ asset ('assets/frontend/vendors/Counter-Up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset ('assets/frontend/vendors/Counter-Up/waypoints.min.js') }}"></script>
    <!-- Owlcarousel JS -->
    <script src="{{ asset ('assets/frontend/vendors/owl_carousel/owl.carousel.min.js') }}"></script>
    <!-- Stellar JS -->
    <script src="{{ asset ('assets/frontend/vendors/stellar/jquery.stellar.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset ('assets/frontend/js/theme.js') }}"></script>
</body>
</html>
