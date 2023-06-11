
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
    <div class="container-fluid">
      <!-- menu inicio /-->
      <button class="btn btn-dark text-light m-5 fs-5 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        MENU
      </button>

      <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

          <div class="dropdown mt-3">
            <ul>
              <li><button class="btn btn-border-success text-center border-success p-2 m-3"><a href="./view/inicio_sesion.php">inicia o registrate</a></button></li>
              <li><button class="btn btn-border-success text-center border-success p-2 m-3"><a href="#">prueba</a></button></li>
              <li><button class="btn btn-border-success text-center border-success p-2 m-3"><a href="#">prueba</a></button></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- menu final /-->
      <div class="container-fluid">
        <div class="row-12 py-5 border d-flex justify-content-center">
          <div class="col-10 py-5 border">
            <!-- carruser /-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./imgs/neko.jpg" class="d-block w-100" alt="./imgs/neko.jpg">
                  </div>
                  <div class="carousel-item active ">
                    <img src="# " class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item active ">
                    <img src="./imgs/neko.jpg" class="d-block w-100" alt="./imgs/neko.jpg">
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
            <!-- carruser /-->
            </div>
        </div>
      </div>
  </div>


  <footer class="bg-dark text-light py-5 mt-5 ">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Contáctanos</h4>
        <ul class="list-unstyled">
          <li><i class="bi bi-geo-alt-fill"></i> Dirección: Calle Principal 123, Ciudad</li>
          <li><i class="bi bi-envelope-fill"></i> Email: info@tudominio.com</li>
          <li><i class="bi bi-phone-fill"></i> Teléfono: +1234567890</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Enlaces útiles</h4>
        <ul class="list-unstyled">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Acerca de nosotros</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Suscríbete</h4>
        <p>Recibe nuestras últimas noticias y actualizaciones.</p>
        <form>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Correo electrónico" required>
            <button class="btn btn-primary" type="submit">Suscribirse</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col text-center">
        <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>

