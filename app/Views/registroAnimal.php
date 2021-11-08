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
    <link rel="stylesheet" href="<?= base_url('/public/styles/estilos.css') ?>">
    <title>Registro animales</title>
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
							<a class="nav-link" href="<?= site_url('/productos/listado') ?>">Lista de productos</a>
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
        <div class="container mb-5">
            <div class="row mt-5 d-flex flex-row">
                <div class="col-12 col-md-5">
                    <h3 class="fuente fw-bold text-center">
                        Registro de animales
                    </h3>

                    <form action="<?= site_url('/animales/registro/nuevo')?>" method="POST" class="mt-5">
                        <div class="mb-3">
                            <label class="form-label">Nombre del animal</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fotografia</label>
                            <input type="text" class="form-control" name="foto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edad</label>
                            <input type="number" class="form-control" name="edad">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" style="height: 100%;"></textarea>
                                <label for="floatingTextarea">Descripción</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de animal:</label>
                            <select class="form-select" name="tipo">
                                <option value="1" selected>Perro</option>
                                <option value="2">Gato</option>
                                <option value="3">Ave</option>
                                <option value="4">Caballo</option>
                                <option value="5">Pez</option>
                            </select>
                        </div>
                        <button class="btn btn-primary w-100 mt-2" type="submit">Enviar</button>
                        <a href="<?= site_url('/animales/listado')?>" class="btn btn-success mt-2 w-100">ver inventario</a>
                    </form>
                </div>
                <div class="col-12 col-md-5 align-self-end mb-5">
                    <img src="<?= base_url('public/img/registro1.png')?>" alt="imagen" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </main>

    <section>
        <?php if(session('mensaje')): ?>
        <div class="modal fade" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-while fondo">
                        <h5 class="modal-title" id="exampleModalLabel">Casa hogar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5><?= session('mensaje') ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['mensaje']); ?>
        <?php endif ?>
    </section>

    <footer></footer>

    <script type="module" src="<?= base_url('public/js/lanzarmodal.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src = "https://kit.fontawesome.com/3675f85246.js" crossorigin = "anónimo"> </script>
</body>
</html>