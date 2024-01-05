	<nav class="navbar navbar-transparent navbar-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<a href="#home">
					<!-- Navbar Judul Pojok Kiri -->
					<div class="logo-container">
						<div class="logo">
							<img src="<?= base_url('assets2'); ?>/img/menara48.jpg" alt="Expert System Computer">
						</div>
						<div class="brand">
							Menara <br>Computer
						</div>
					</div>
					<!-- End of Navbar Judul Pojok Kiri -->
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="example">
				<!-- Navbar Kanan -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#home" class="page-scroll">
							<i class="fa fa-home"></i>
							Home
						</a>
					</li>
					<li>
						<a href="<?= base_url('auth'); ?>">
							<i class="fa fa-sign-in"></i>
							Login
						</a>
					</li>
				</ul>
				<!-- End of Navbar Kanan -->
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="wrapper">
		<div class="parallax filter-gradient blue" data-color="blue">
			<div class="container">
				<div class="row">
					<div class="col-md-7  hidden-xs">
						<div class="parallax-image">
							<img src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/mac1.png" />
						</div>
					</div>
					<div class="col-md-5">
						<div class="description text-center">
							<h2>Sistem Pakar Laptop</h2>
							<br>
							<h5>Aplikasi Untuk Diagnosa Kerusakan Laptop </h5>
						</div>
					</div>
				</div>
			</div>
		</div>
