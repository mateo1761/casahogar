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
    <title>Lista productos</title>
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
							<a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('/productos/registro') ?>">Registro productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('/animales/registro') ?>">Registro animales</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Lista de productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url('/animales/listado') ?>">Lista de animales</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    <main>
        <div class="container mt-5">
			<div class="row row-cols-1 row-cols-md-5 g-4">
			<?php foreach($producto as $productos): ?>
				<div class="col">
					<div class="card h-100">
						<img src="<?= $productos['foto'] ?>" class="card-img-top img-fluid h-100" alt="foto">
						<div class="card-body">
							<h5 class="card-title"><?= $productos['producto'] ?></h5>
							<p class="card-text">precio: <?= $productos['precio'] ?></p>
							<p class="card-text"><?= $productos['descripcion'] ?></p>
							<a data-bs-toggle="modal" data-bs-target="#confirmacion<?= $productos['id']?>" href=# class="btn btn-danger w-100 mb-2"><i class="far fa-trash-alt"></i></a>
							<a data-bs-toggle="modal" data-bs-target="#editar<?= $productos['id']?>" href="#" class="btn btn-primary w-100"><i class="far fa-edit"></i></a>
						</div>
					</div>

					<section>
						<div class="modal fade" id="confirmacion<?= $productos['id']?>">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header fondoPrincipal text-white">
								<h5 class="modal-title">Lista productos</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
								<p>¿Estás seguro de eliminar el producto pienselo bien?</p>
								<p><?= $productos['id']?></p>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
								<a href="<?= site_url('/productos/eliminar/'.$productos['id'])?>" class="btn btn-danger">Aceptar</a>
								</div>
							</div>
							</div>
						</div>
					</section>

					<section>
					<div class="modal fade" id="editar<?= $productos['id']?>">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header fondoPrincipal text-white">
								<h5 class="modal-title">lista Productos</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-4">
											<img src="<?= $productos['foto'] ?>" alt="foto" class="img-fluid">
										</div>
										<div class="col-9">
											<form action="<?= site_url('/productos/editar/'.$productos['id']) ?>" method="POST">
												<div class="mb-3">
													<label class="form-label" required>producto: </label>
													<input type="text" class="form-control" name="producto" value="<?= $productos['producto'] ?>">
												</div>

												<div class="mb-3">
													<label class="form-label">precio: </label>
													<input type="number" class="form-control" name="precio" value="<?= $productos['precio'] ?>">
												</div>

												<button class="btn btn-success" type="submit" >Editar</button>
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</section>
				</div>
			<?php endforeach ?>
			</div>
        </div>
    </main>

    <footer>

    </footer>

    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>