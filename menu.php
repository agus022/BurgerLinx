<!DOCTYPE html>
<?php
$hamburguesas = array(
  array("id" => 1, "nombre" => "Hamburguesa de queso", "descripcion" => "Hamburguesa simple con carne a la parilla y queso americano.", "precio" => "$60.00", "url" => "", "imagen" => "./images/hamburguesas_01.jpg"),
  array("id" => 2, "nombre" => "Hamburguesa de pollo", "descripcion" => "Hamburguesa simple con carne de pechuga de pollo.", "precio" => "$88.00", "url" => "", "imagen" => "./images/hamburguesas_02.jpg"),
  array("id" => 3, "nombre" => "Hamburguesa de chilli", "descripcion" => "Hamburguesa con carne de pechuga de pollo y nuestra receta especial de chili.", "precio" => "$90.00", "url" => "", "imagen" => "./images/hamburguesas_03.jpg")

);
// echo "<pre>";
// print_r($hamburguesas);
// die();
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Burger Linx</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link href="./css/main.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>

<body>
  <div>
    <div class="container">
      <header>
        <div class="row">
          <div class="col-md-2">
            <img
              src="./images/logoburger.png"
              alt="BurgerLinx"
              width="80em"
              height="80em" />
          </div>
          <div class="col-md-8">
            <nav class="navbar navbar-expand-lg bg-body-tertiary h-100">
              <div class="container-fluid">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        aria-current="page"
                        href="quienes.php">Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sucrusal.php">Sucursales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <div class="col-md-2">User</div>
        </div>
        <div class="row">
          <div class="col-md">
            <img
              src="./images/encabezado2.jpg"
              alt="Bienvenido a BurgerLinx"
              class="img-fluid" />
          </div>
        </div>
      </header>
      <nav
        class="navbar navbar-expand-lg bg-body-tertiary bg-dark"
        data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Inicio</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="promociones.php">Promociones</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="menu.php">Hamburguesas</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="hotdog.php">Hot-Dogs</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ensaladas.php">Ensaladas</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="bebidas.php">Bebidas</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="postres.php">Postres</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <a class="dropdown-item" href="combos.php">Combos</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Busca el producto"
                aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">
                Buscar
              </button>
            </form>
          </div>
        </div>
      </nav>
      <main>
        <section>
          <div class="row">
            <div class="col-md-8">Promocion del dia</div>
            <div class="col-md-4">Promocion paquetes</div>
          </div>
        </section>

        <section>
          <div class="row">
            <?php
            foreach ($hamburguesas as $hamburguesa):
            ?>
              <div class="col-md-3">
                <div class="card" style="width: 18rem">
                  <img
                    src="<?php echo $hamburguesa['imagen']; ?>"
                    class="card-img-top"
                    alt="Hamburguesa de queso" />
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $hamburguesa['nombre']; ?></h5>
                    <p class="card-text">
                      <?php echo $hamburguesa['descripcion']; ?>
                    </p>
                    <span><?php echo $hamburguesa['precio']; ?></span>
                  </div>
                </div>
              </div>
            <?php
            endforeach;
            ?>
            <div class="col-md-3">
              <div class="card" style="width: 18rem">
                <img
                  src="./images/hamburguesas_04.jpg"
                  class="card-img-top"
                  alt="Hamburguesa doble" />
                <div class="card-body">
                  <h5 class="card-title">Hamburguesa 3/4 L.</h5>
                  <p class="card-text">
                    Hamburguesa con carne de res a la parrilla de 3/4 de libra
                    con pan integral.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <div class="col-md-3">
              <div class="card" style="width: 18rem">
                <img
                  src="./images/hamburguesas_05.jpg"
                  class="card-img-top"
                  alt="Hamburguesa doble" />
                <div class="card-body">
                  <h5 class="card-title">Hamburguesa queso doble</h5>
                  <p class="card-text">
                    Hamburguesa con carne de res a la parrilla y doble queso.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem">
                <img
                  src="./images/hamburguesas_06.jpg"
                  class="card-img-top"
                  alt="Hamburguesa doble" />
                <div class="card-body">
                  <h5 class="card-title">Hamburguesa a doble sentido</h5>
                  <p class="card-text">
                    Hamburguesa con doble carne de res y doble queso.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem">
                <img
                  src="./images/hamburguesas_07.jpg"
                  class="card-img-top"
                  alt="Hot-Dog simple" />
                <div class="card-body">
                  <h5 class="card-title">Hot-Dog simplre</h5>
                  <p class="card-text">
                    Hot Dog con salchica de carne de res simple.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem">
                <img
                  src="./images/hamburguesas_08.jpg"
                  class="card-img-top"
                  alt="HotDog " />
                <div class="card-body">
                  <h5 class="card-title">Hot-Dog simplre</h5>
                  <p class="card-text">
                    Hot Dog con salchica de carne de res simple.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
          </div>
        </section>
      </main>
      <footer>
        <div class="row">
          <div class="col-md">Menu inferior 1</div>
          <div class="col-md">Redes Sociales</div>
        </div>
      </footer>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>