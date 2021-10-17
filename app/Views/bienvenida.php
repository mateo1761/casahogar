<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel = "preconnect" href = "https://fonts.googleapis.com">
	<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
	<link href = "https: //fonts.googleapis.com/css2? family = Festive & display = swap "rel =" stylesheet ">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<title>Animalandia</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="#">
					<i class="fas fa-paw"></i>
					Casa hogar
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<section>
			<div class="container mt-5">
				<div class="row">
					<div class="col-12">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="imagen 1">
								</div>
								<div class="carousel-item">
									<img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="imagen 2">
								</div>
								<div class="carousel-item">
									<img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="imagen 3">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container mt-5">
				<div class="row d-flex justify-content-center">
					<div class="col-8 text-center">
						<h2>Hogar de animales <span class="fuente">Animalandia</span></h2>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sunt repellat tenetur, ipsum iste dolorum nihil consectetur, suscipit, aspernatur soluta a. Amet ab dolores, sunt sint impedit at vero alias.
							Assumenda, accusantium id, mollitia expedita eum necessitatibus delectus, saepe dolores laboriosam tempore animi! Praesentium harum ipsam aspernatur quisquam facere ab adipisci nobis. Iusto porro voluptatum distinctio? Cupiditate aliquam rerum quidem!
							Necessitatibus assumenda beatae, ipsa labore, repudiandae est eveniet expedita, modi vel tenetur deleniti culpa dolorem doloribus laudantium architecto consectetur voluptatem cum saepe repellat quo blanditiis quae veniam sunt! Unde, voluptates!
							Numquam eum perferendis expedita cum rem odio, corrupti neque quod dolorem quibusdam sint ullam perspiciatis natus eos? Dolore minima ex beatae ut fugiat illo recusandae quasi, voluptates possimus explicabo est.
							Quidem fugiat ut soluta placeat optio, ducimus non accusamus, pariatur beatae veritatis iure possimus temporibus. Repudiandae dignissimos expedita ullam labore quas dolorum, nulla, officia distinctio laboriosam quibusdam possimus ipsa cum!
						</p>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row d-flex justify-content-center mt-5 mb-5">
					<div class="col-1">
						<img src="<?= base_url('public/img/bird-icon.png') ?>" class="img-fluid zoom" alt="icono1">
						<h5 class="text-center">Aves</h5>
					</div>
					<div class="col-1">
						<img src="<?= base_url('public/img/cat-icon.png') ?>" class="img-fluid zoom" alt="icono2">
						<h5 class="text-center">Gatos</h5>
					</div>
					<div class="col-1">
						<img src="<?= base_url('public/img/fish-icon.png') ?>" class="img-fluid zoom" alt="icono4">
						<h5 class="text-center">Peces</h5>
					</div>
					<div class="col-1">
						<img src="<?= base_url('public/img/dog-icon.png')?>" class="img-fluid zoom" alt="icono3">
						<h5 class="text-center">Perros</h5>
					</div>
					<div class="col-1">
						<img src="<?= base_url('public/img/horse-icon.png') ?>" class="img-fluid zoom" alt="icono5">
						<h5 class="text-center">Caballos</h5>
					</div>
					<!--
					<div class="col-8 text-center">
						<ul class="lista d-flex justify-content-center">
							<li>
								<img src="<?= base_url('public/img/bird-icon.png') ?>" class="zoom" alt="icono1">
								<h5>Aves</h5>
							</li>
							<li>
								<img src="<?= base_url('public/img/cat-icon.png') ?>" class="zoom" alt="icono2">
								<h5>Gatos</h5>
							</li>
							<li>
								<img src="<?= base_url('public/img/dog-icon.png')?>" class="zoom" alt="icono3">
								<h5>Perros</h5>
							</li>
							<li>
								<img src="<?= base_url('public/img/fish-icon.png') ?>" class="zoom" alt="icono4">
								<h5>Peces</h5>
							</li>
							<li>
								<img src="<?= base_url('public/img/horse-icon.png') ?>" class="zoom" alt="icono5">
								<h5>Caballos</h5>
							</li>
						</ul>
					</div>-->
				</div>
			</div>
		</section>

		<section class="fondoapp">
			
		</section>
	</main>

	<footer>

	</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src = "https://kit.fontawesome.com/3675f85246.js" crossorigin = "anónimo"> </script>
</body>
</html>