<!doctype html>
<html>
	<head>
		<title>E-Commerce</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<style>
			body
			{
				min-height: 100vh;
				background: #fafafa;
			}
			
			.social-link
			{
				width: 30px;
				height: 30px;
				border: 1px solid #ddd;
				display: flex;
				align-items: center;
				justify-content: center;
				color: #666;
				border-radius: 50%;
				transition: all 0.3s;
				font-size: 0.9rem;
			}
			
			.social-link:hover, .social-link:focus {
				background: #ddd;
				text-decoration: none;
				color: #555;
			}
			
			.progress {
				height: 10px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="#">E-Commerce</a>
			<button class="navbar-toggler" type="button"data-toggle="collapse" data-target="#navbarSupportedContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">
							Home
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							About
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Services
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Contact
						</a>
					</li>
				</ul>
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" class="btn btn-in-light my-sm-0" type="submit" />
					<button class="btn btn-light my-sm-0">Search</button>
				</form>
			</div>
		</nav>
		<div class="container py-5">
			<!-- For Demo Purpose-->
			<header class="text-center mb-5">
				<h1 class="display-4 font-weight-bold">Welcome To Our Shop</h1>
				<p class="font-italic text-muted mb-0">In our shop we have products with extraordinary quality</p>
				<p class="font-italic text-muted">Snippet By <a href="https://bootstrapious.com" class="text-muted">
				    <u>Bootstrapious</u></a>
				</p>
			</header>
			<div class="row pb-5 mb-4">
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<!-- Card-->
					<div class="card rounded shadow-sm border-0">
						<div class="card-body p-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
							<h5> <a href="#" class="text-dark">Awesome product</a></h5>
							<p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<ul class="list-inline small">
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
					<!-- Card-->
					<div class="card rounded shadow-sm border-0">
						<div class="card-body p-4"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
							<h5> <a href="#" class="text-dark">Awesome product</a></h5>
							<p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<ul class="list-inline small">
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
								<li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	

	</body>
</html>