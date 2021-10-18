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
    <title>Document</title>
</head>
<body>
    <header></header>

    <main>
        <div class="container mt-5">
            <div class="row d-flex flex-row-reverse">
                <div class="col-8 col-md-5">
                    <h2 class="fuente mb-5">Tienda gamer</h2>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Ingrese su correo electrónico</label>
                            <input type="email" class="form-control">
                            <div class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ingrese producto</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ingrese precio</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ingrese su direccion de domicilio</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ingrese numero de celular</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">select menu</label>
                            <select class="form-select">
                                <option value="1" selected>Pc gamer</option>
                                <option value="2">Juegos</option>
                                <option value="3">Ps4</option>
                                <option value="4">Portatil</option>
                                <option value="5">Controles</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>