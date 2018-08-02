<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('guest/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('guest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('guest/css/animate.css')}}">
	<link href="{{ asset('guest/css/animate.min.css')}}" rel="stylesheet"> 
	<link href="{{ asset('guest/css/style.css')}}" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="/"><h1>SiPemBaLab</h1></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">		
                @if (Route::has('login'))					
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							@auth
							<li role="presentation"><a href="{{url('/home')}}">home</a></li>
							@else
							<li role="presentation"><a href="{{route('login')}}">Login</a></li>
							<!-- <li role="presentation"><a href="{{route('register')}}">Register</a></li> -->
							@endauth					
						</ul>
					</div>
					@endif
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="{{ asset('logo2.JPG')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Selamat Datang Di Website Peminjaman Barang Lab</span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p>Silakan Cari Barang Yang Anda Butuhkan</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<!-- <div class="form-group">
										<button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div> -->
									<div class="form-group">
										<button type="getnow" name="Get Now" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="{{ asset('logo3.jpg')}}" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Pergunakan Alat Yang Kalian Pinjam Semaksimal Mungkin</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									<p>Silakan Cari Barang Yang Anda Butuhkan</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<!-- <div class="form-group">
										<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>
									</div> -->
									<div class="form-group">
										<button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button>
									</div>
								</form>
							</div>
						</div>
				    </div> 
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	
	<!-- <div class="about">
		<div class="container">
			<div class="text-center">
				<h2>Quaerat quod voluptate consequuntur </h2>
				<div class="col-md-10 col-md-offset-1">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, 
					dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! 
					Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
				</div>
		
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="btn-gamp"><a href="#">Learn More</a></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div class="gamp-btn"><a href="#">download</a></div>
				</div>
				
			</div>	
		</div>			
	</div> -->
	<hr>
	
	<div class="services">
		<div class="container">
			<div class="text-center">
				<h2>Visi Misi SMK Assalaam Bandung</h2>
			</div>
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<i class="fa fa-cloud"></i>
				<h3>Visi</h3>
				<p> Menjadikan SMK Assalaam sebagai sekolah IDAMAN.</p>
			</div>
			<!-- <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<i class="fa fa-cloud"></i>
				<h3>Retina Ready</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div> -->
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<i class="fa fa-book"></i>	
				<h3>Misi</h3>
				<p>Intelek dalam melaksanakan proses pembelajaran</p>
				<p>Disiplin dalam segala aspek kehidupan</p>
				<p>Amanah dalam melaksanakan tugas</p>
				<p>Maju dan menang untuk kepentingan bersama</p>
				<p>Aktif dalam merespon perkembangan</p>
				<p>Norma islam sebagai landasan dalam beraktifitas</p>
			</div>
			<!-- <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
				<i class="fa fa-gear"></i>	
				<h3>Easy to Customize</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div> -->
		</div>			
	</div>
	
	<section class="action">
<!-- 		<div class="container">
			<div class="left-text hidden-xs">
				<h4>Amet porro numquam ratione</h4>
				<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
			</div> -->
			<div class="container">		
			<div class="col-md-6">
				<figure class="effect-marley">
					<img src="{{ asset('logo6.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>SMK Assalaam Bandung</h4>
						<p> SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.

						Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="container">		
			<div class="col-md-6">
				<figure class="effect-marley">
					<img src="{{ asset('logo8.JPG')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Lab Komputer SMK Assalaam</h4>
						<p>Ini merupakan salah satu lab yang dimiliki oleh smk assalaam,dengan adanya fasilitas yang lengkap ini smk assalaam mengharapkan lulusan lulusanya bisa bersaing nanti didunia insdutri.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
	</section><br>
	
	<!-- <div class="gallery">
		<div class="text-center">
			<h2>Gallery</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident </p>
		</div>
		<div class="container">		
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/8.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/9.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/10.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
		
		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/11.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/12.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{ asset('guest/img/13.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>sweet marley</h4>
						<p>Marley tried to convince her but she was not interested.</p>				
					</figcaption>			
				</figure>
			</div>
		</div>
	</div> -->
		
	<footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>About Us</h4>					
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-gear"></i> Created By : Rizky Fadhilah</li>
						<li><i class="fa fa-home fa"></i> Jl.Andir Baleendah,Kab.Bandung,Jawa Barat </li>
						<li><i class="fa fa-phone fa"></i> +62858 6019 9073</li>
						<li><i class="fa fa-envelope fa"></i> https://smkassalaambandung.sch.id </li>
					</ul>
				</div>
			</div>
			
			<!-- <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">				
				<div class="text-center">
					<h4>Photo Gallery</h4>
					<ul class="sidebar-gallery">
						<li><a href="#"><img src="{{ asset('guest/img/gallery1.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('guest/img/gallery2.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('guest/img/gallery3.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('guest/img/gallery4.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('guest/img/gallery5.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{ asset('guest/img/gallery6.png')}}" alt="" /></a></li>					
					</ul>
				</div>
			</div> -->
			
			<!-- <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<div class="">
					<h4>Newsletter Registration</h4>
					<p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
					<div class="btn-gamp">		
						<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
					</div>
					<div class="btn-gamp">
						<a type="submit" class="btn btn-default">Subscribe</a>
					</div>
				
			</div>
			
		</div> -->	
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<h5><font color="000">Follow Us</font></h5>
					<ul class="social-network">
						<li><a href="https://www.facebook.com/pages/SMK-Assalaam-Bandung/429101460508517" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/smkassalaam/?hl=id" class="instagram tool-tip" title="instagram"><i class="fa fa-instagram"></i></a></li>
						<!-- <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> -->
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; Day 2015 by <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Bootstrap Themes</a>.All Rights Reserved.
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Day
                -->
			</div>						
		</div>				
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('guest/js/jquery.js')}}"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('guest/js/bootstrap.min.js')}}"></script>	
	<script src="{{ asset('guest/js/wow.min.js')}}"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>