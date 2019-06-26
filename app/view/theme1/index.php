<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Style -->
	<link rel="stylesheet" href="<?= public_url('styles/main.css') ?>">

</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a href="" class="navbar-brand">
		<img src="<?= public_url('images/logo.png') ?>" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarResponsive" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a href="" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">About</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Services</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Products</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">Catalogue</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?= public_url('images/bg3.jpg') ?>" alt="">
			<div class="carousel-caption">
				<h1 class="display-2">Bootsrap</h1>
				<h3>Complete Website Layout</h3>
				<button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
				<button type="button" class="btn btn-primary btn-lg">View Demo</button>
			</div>
		</div>
		<div class="carousel-item">
		<img src="<?= public_url('images/bg4.jpg') ?>" alt="">
		</div>
		<div class="carousel-item">
		<img src="<?= public_url('images/bg2.jpg') ?>" alt="">
		</div>
		<div class="carousel-item">
			<img src="<?= public_url('images/bg1.jpg') ?>" alt="">
		</div>
	</div>
</div>
<!-- Jumbotro -->
<div class="container-fluid">
	<div class="row jumbotron">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae! Deleniti neque nam temporibus reprehenderit obcaecati, est repudiandae ut nulla, libero impedit repellendus, voluptatum voluptas amet possimus quia! Labore, obcaecati?
			</p>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">More Details</button></a>
			</div>
		</div>
	</div>
</div>
<!-- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Built with ease</h1>
		</div>
		<hr>
		<div class="col-12">
			<p class="lead">
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur veritatis odit labore voluptas quisquam possimus, reprehenderit, odio inventore adipisci aliquam deleniti voluptates sapiente, ex quod similique architecto illo hic magnam.
			</p>
		</div>
	</div>
</div>
<!-- Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-code"></i>
			<h3>HTML5</h3>
			<p>This website built with latest version of HTML5.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fas fa-bold"></i>
			<h3>BOOTSTRAP</h3>
			<p>This website built with latest version of Bootsrap, Bootsrap 4.</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<i class="fab fa-css3"></i>
			<h3>CSS3</h3>
			<p>This website built with latest version of HTML5.</p>
		</div>
	</div>
	<hr class="my-4">
</div>
<!-- Two Column Section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>If you build it...</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio nostrum est sapiente! Corporis rem eius natus, quis sed tempora officia eum, neque quam, iste quas alias distinctio commodi eaque?</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio nostrum est sapiente! Corporis rem eius natus, quis sed tempora officia eum, neque quam, iste quas alias distinctio commodi eaque?</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio nostrum est sapiente! Corporis rem eius natus, quis sed tempora officia eum, neque quam, iste quas alias distinctio commodi eaque?</p>
			<a href="#" class="btn btn-primary">Details</a>
			<br>
		</div>
		<div class="col-lg-6">
		<img src="<?= public_url('images/bg2.jpg') ?>" alt="" class="img-fluid">
		</div>
	</div>
</div>
<hr class="my-4">
<!-- Fixed Background -->
<figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</div>
</figure>
<!-- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click For Fun</button>
<div id="emoji" class="collapse">
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="<?= public_url('images/bg1.jpg'); ?>">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="<?= public_url('images/bg2.jpg'); ?>">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="<?= public_url('images/bg2.jpg'); ?>">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="<?= public_url('images/bg4.jpg'); ?>">
			</div>
			<div class="col-sm-6 col-md-3">
				<img class="gif" src="<?= public_url('images/bg1.jpg'); ?>">
			</div>
		</div>
	</div>
</div>
<!-- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Meet the team</h1>
		</div>
		<hr>
	</div>
</div>
<!-- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
			<img src="<?= public_url( 'images/bg3.jpg' ) ?>" class="card-img-top" alt="">
				<div class="card-body">
					<h4 class="card-title">John Doe</h4>
					<p class="card-text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium incidunt nulla eos officia nostrum, laboriosam voluptates commodi aliquid velit dicta, temporibus veniam reiciendis repudiandae tempore eligendi nemo laudantium est harum!
					</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
			<img src="<?= public_url( 'images/bg4.jpg' ) ?>" class="card-img-top" alt="">
				<div class="card-body">
					<h4 class="card-title">Marry Jane</h4>
					<p class="card-text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium incidunt nulla eos officia nostrum, laboriosam voluptates commodi aliquid velit dicta, temporibus veniam reiciendis repudiandae tempore eligendi nemo laudantium est harum!
					</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<img src="<?= public_url('images/bg2.jpg') ?>" class="card-img-top" alt="">
				<div class="card-body">
					<h4 class="card-title">Phill Jane</h4>
					<p class="card-text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium incidunt nulla eos officia nostrum, laboriosam voluptates commodi aliquid velit dicta, temporibus veniam reiciendis repudiandae tempore eligendi nemo laudantium est harum!
					</p>
					<a href="#" class="btn btn-outline-secondary">See Profile</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Two column section -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>Some title here</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio nostrum est sapiente! Corporis rem eius natus, quis sed tempora officia eum, neque quam, iste quas alias distinctio commodi eaque?</p>
		</div>
		<div class="col-lg-6">
			<img src="<?= public_url('images/bg2.jpg') ?>" alt="" class="img-fluid">
		</div>
	</div>
	<hr class="my-4">
</div>

<!-- Contant -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>
<!-- FOOTER -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
			<img src="<?= public_url('images/logo.png') ?>" alt="">
				<hr class="light">
				<p>555-555-555</p>
				<p>britneylover40@gmail.com</p>
				<p>street</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<p>555-555-555</p>
				<hr class="light">
				<p>britneylover40@gmail.com</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<p>555-555-555</p>
				<p>britneylover40@gmail.com</p>
				<p>street</p>
			</div>
			<div class="col-12">
				<hr class="light">
				<h5>&copy;bayramarif.dev</h5>
			</div>
		</div>
	</div>
</footer>
</body>

</html>