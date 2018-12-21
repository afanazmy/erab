<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<title> e-RAB | Estimasi Meraih Visi </title>
	<!-- Bootstrap core CSS -->
	<link href="{!! asset('treviso/css/bootstrap.min.css') !!}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
	<link href="{!! asset('treviso/css/style.css') !!}" rel="stylesheet">
</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top"><img src="{!! asset('treviso/images/ERAB.png') !!}" alt="ERAB theme logo"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					@guest
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a class="page-scroll" href="#team">Team</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
					@else
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a class="page-scroll" href="#team">Team</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
					@if (Auth::user()->role == "admin")
					<li>
						<a class="page-scroll" href="{!! route('item') !!}">Item</a>
					</li>
					@else
					<li>
						<a class="page-scroll" href="{{ route('project') }}">Project</a>
					</li>
					@endif
					@endguest


					@if (!Auth::user())
					<li>
						<a class="page-scroll" href="{{ route('login') }}">Login</a>
					</li>
					@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
					@endif
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Tipe Rumah</h2>
						<p>
							"Jenis tipe rumah diambil berdasarkan luas dari bangunan tersebut. Setiap tipe rumah inipun umumnya memiliki karakteristik khusus baik dari segi dimensi bangunan hingga kebutuhan ruang, meskipun pada akhirnya pengembang biasanya akan
							menyesuaikannya dengan konsep dari perumahan secara keseluruhan."
						</p>
					</div>
				</div>
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{!! asset('treviso/images/demo/1.png') !!}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>TIPE 36</h2>
								<p>Minimalism, Economist</p>
								<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{!! asset('treviso/images/demo/2.png') !!}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>TIPE 45</h2>
								<p>Simple, Comfortable</p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{!! asset('treviso/images/demo/3.png') !!}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>TIPE 54</h2>
								<p>Wide, Impressive</p>
								<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-6 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="{!! asset('treviso/images/demo/4.png') !!}" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>TIPE 60</h2>
								<p>Elegance, Modern</p>
								<a href="#" data-toggle="modal" data-target="#Modal-4">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row row-0-gutter">

			</div>
		</div><!-- container -->
	</section>

	<section id="about" class="mz-module">
		<div class="container light-bg">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>ABOUT</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="mz-about-container">
						<p>Merupakan sistem informasi dalam merancang dan memberikan estimasi anggaran dalam pembangunan sebuah perencanaan pembangunan terkhusus bidang properti. Dengan adanya sistem informasi ini diharapkan dapat mengefisiensikan pengeluaran dan
							terintegrasi pula dengan database sehingga dimudahkan dalam pembuatan laporan.</p>
					</div>
				</div>
				<div class="col-md-6">
					<!-- skill bar item -->
					<div class="skillbar-item">
						<div class="skillbar" data-percent="90%">
							<h3>Efficient</h3>
							<div class="skillbar-bar">
								<div class="skillbar-percent" style="width: 90%;">
								</div>
							</div>
						</div>
					</div>
					<!-- skill bar item -->
					<div class="skillbar-item">
						<div class="skillbar" data-percent="80%">
							<h3>User Friendly</h3>
							<div class="skillbar-bar">
								<div class="skillbar-percent" style="width: 80%;">
								</div>
							</div>
						</div>
					</div>
					<!-- skill bar item -->
					<div class="skillbar-item">
						<div class="skillbar" data-percent="85%">
							<h3>Easy</h3>
							<div class="skillbar-bar">
								<div class="skillbar-percent" style="width: 85%;">
								</div>
							</div>
						</div>
					</div>
					<!-- skill bar item -->
					<div class="skillbar-item">
						<div class="skillbar" data-percent="70%">
							<h3>Manageable</h3>
							<div class="skillbar-bar">
								<div class="skillbar-percent" style="width: 70%;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-0-gutter">
				<!-- about module -->
				<div class="col-md-3 col-0-gutter mz-about-default text-center">
					<div class="mz-module-about">
						<i class="fa fa-briefcase ot-circle"></i>
						<h3>Efficient</h3>
					</div>
				</div>
				<!-- end about module -->
				<!-- about module -->
				<div class="col-md-3 col-0-gutter mz-about-dark text-center">
					<div class="mz-module-about">
						<i class="fa fa-users ot-circle"></i>
						<h3>User Friendly</h3>
					</div>
				</div>
				<!-- end about module -->
				<!-- about module -->
				<div class="col-md-3 col-0-gutter mz-about-default text-center">
					<div class="mz-module-about">
						<i class="fa fa-child ot-circle"></i>
						<h3>Easy</h3>
					</div>
				</div>
				<!-- end about module -->
				<!-- about module -->
				<div class="col-md-3 col-0-gutter mz-about-dark text-center">
					<div class="mz-module-about">
						<i class="fa fa-cube ot-circle"></i>
						<h3>Manageable</h3>
					</div>
				</div>
				<!-- end about module -->
			</div>
		</div>
		<!-- /.container -->
	</section>

	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Our Team</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- team member item -->
				<div class="col-md-4">
					<div class="team-item">
						<div class="team-image">
							<img src="{!! asset('treviso/images/demo/farez.jpeg') !!}" class="img-responsive" alt="author">
						</div>
						<div class="team-text">
							<h3>Farhan Reza S</h3>
							<div class="team-position">Developer</div>
							<p>He codes any programming language such as : C, C++, Java </p>
						</div>
					</div>
				</div>
				<!-- end team member item -->
				<!-- team member item -->
				<div class="col-md-4">
					<div class="team-item">
						<div class="team-image">
							<img src="{!! asset('treviso/images/demo/novi.jpeg') !!}" class="img-responsive" alt="author">
						</div>
						<div class="team-text">
							<h3>Noviana Widyaningrum</h3>
							<div class="team-position">Conceptor and Data Research</div>
							<p>Make a concept for system and give a solution for any problems from client</p>
						</div>
					</div>
				</div>
				<!-- end team member item -->
				<!-- team member item -->
				<div class="col-md-4">
					<div class="team-item">
						<div class="team-image">
							<img src="{!! asset('treviso/images/demo/reza.jpeg') !!}" class="img-responsive" alt="author">
						</div>
						<div class="team-text">
							<h3>Reza Haris F. A</h3>
							<div class="team-position">UI/UX Designer</div>
							<p>Sketch, Design and Publish it into a cool interaction for user</p>
						</div>
					</div>
				</div>
				<!-- end team member item -->
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="section-title">
						<h2>Contact Us</h2>
						<p>Apabila terdapat pertanyaan, kritik maupun saran silahkan mengisi form di bawah ini<br>Feel free to contact us!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<form name="sentMessage" id="contactForm" novalidate="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required="" data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required="" data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" placeholder="Your Message *" id="message" name="message" required="" data-validation-required-message="Please enter a message."></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<div class="col-lg-12 text-center">
								<div id="success"></div>
								<button type="submit" class="btn">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<p id="back-top">
		<a href="#top"><i class="fa fa-angle-up"></i></a>
	</p>
	<footer>
		<div class="container text-center">
			<p>Designed by <a href="http://moozthemes.com"><span>MOOZ</span>Themes.com</a></p>
		</div>
	</footer>

	<!-- Modal for portfolio item 1 -->
	<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-1">TIPE 36</h4>
				</div>
				<div class="modal-body">
					<img src="{!! asset('treviso/images/demo/36.jpeg') !!}" alt="img01" class="img-responsive" />
					<div class="modal-works"><span>Minimalism</span><span>Economist</span></div>
					<p>Rumah dengan ukuran 36 meter persegi yang biasanya jika dilihat dari jenisnya termasuk golongan rumah minimalis sederhana</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 2 -->
	<div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-label-2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-2">TIPE 45</h4>
				</div>
				<div class="modal-body">
					<img src="{!! asset('treviso/images/demo/45.jpeg') !!}" alt="img01" class="img-responsive" />
					<div class="modal-works"><span>Modest</span><span>Comfortable</span></div>
					<p>Rumah dengan ukuran 45 meter persegi yang biasanya jika dilihat dari jenisnya sudah temasuk golongan rumah minimalis mewah</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 3 -->
	<div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-3">TIPE 54</h4>
				</div>
				<div class="modal-body">
					<img src="{!! asset('treviso/images/demo/54.jpeg') !!}" alt="img01" class="img-responsive" />
					<div class="modal-works"><span>Wide</span><span>Impressive</span></div>
					<p>Rumah dengan ukuran 54 meter persegi jika dilihat dari jenisnya sudah termasuk rumah yang cenderung luas</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal for portfolio item 4 -->
	<div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="Modal-label-4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="Modal-label-4">TIPE 60</h4>
				</div>
				<div class="modal-body">
					<img src="{!! asset('treviso/images/demo/60.jpeg') !!}" alt="img01" class="img-responsive" />
					<div class="modal-works"><span>Elegance</span><span>Modern</span></div>
					<p>Rumah dengan ukuran 60 meter persegi jika dilihat dari jenisnya sudah termasuk rumah yang sangat luas dan memiliki kesan elegan</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
	</div>
	</div>
	</div>

	<!-- Bootstrap core JavaScript
			================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{!! asset('treviso/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('treviso/js/SmoothScroll.js') !!}"></script>
	<script src="{!! asset('treviso/js/theme-scripts.js') !!}"></script>
</body>

</html>