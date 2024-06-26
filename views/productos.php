<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">        
    <link rel="stylesheet" href="plugins/toastr/toastr.css">
  </head>
  <header>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="..\views\index.php">Dr. Pet</a> <!-- Agrega la clase 'text-white' para hacer que el texto sea blanco -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"> 
      <li class="nav-item active">
        <a class="nav-link text-white" href="..\views\nuestraClinica.php">Nuestra Clínica <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="..\views\Servicios.php">Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="..\views\productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="..\views\contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-white" href="..\views\login.php">Sesión</a>
      </li>
    </div>
    </ul>
  </div>
</nav>
</header>
<body>
<div class="card-header text-center">
    <h3 class="card-title">Productos</h3>
    <br><br>
      <h4>Cuidado de la mascota</h4>
        <div class="container-items">
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/048985/8711231156849.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Beaphar Pasta Multi-Vitaminas Perro</h5>
                  <p class="price">₡5000</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/049047/8711231129522-650d7355e0dbb.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Beaphar Pasta Dentífrica con Sabor a Carne para Perro y Gato</h5>
                  <p class="price">₡3500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="2">
                  </form>
                </div>
            </div>
          </div><div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/253349/coatex-complemento-alimenticio-para-pelo-piel-en-perros-gatos_1.jpeg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>VetPlus Coatex Complemento Alimenticio para Pelo y Piel en Perros y Gatos</h5>
                  <p class="price">₡16500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="3">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/423811/8435117818095.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Arquivet Aceite de Salmón Escocés para Perros y Gatos</h5>
                  <p class="price">₡9500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/070948/70948-ipakitine-60g_1.JPG" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Vétoquinol Ipakitine para Función Renal</h5>
                  <p class="price">₡11300</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/116901/116901_1.jpeg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Virbac Pronefra para Problemas Renales en Perros y GatosVirbac Pronefra para Problemas Renales en Perros y Gatos</h5>
                  <p class="price">₡14500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>


          <br><br>
          <h4>Alimentación</h4>
          <br><br>


          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/161953/161953-2_1.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Royal Canin Comida Húmeda Mini Puppy para Perro</h5>
                  <p class="price">₡700</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/162745/en-gastrointestinal-mousse_1.jpeg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Pro Plan Veterinary Diets Comida Húmeda EN Gastrointestinal Mousse</h5>
                  <p class="price">₡26500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/000284/01-RC-SHN-MaxiAdult-MV-1-es-ES-pdf-65df5094e4f4a.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Royal Canin Maxi Adult Pienso para Perro Adulto de Razas Tamaño Grande</h5>
                  <p class="price">₡43500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/187843/187843-7613035442535frangoecen_0.png" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Pack 24 Gourmet Comida Húmeda Gold Tartelette de Pollo y Zanahoria para Gatos</h5>
                  <p class="price">₡14000</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/430596/Grature-adult-salmon-cat-6368e596d3818.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Grature Pienso Anti Bolas de Pelo para Gatos Adultos</h5>
                  <p class="price">₡5000</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/003459/3459_0.jpeg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Royal Canin Maine Coon Pienso para Gato Adulto de Raza </h5>
                  <p class="price">₡25500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>

          <br><br>
          <h4>Accesorios</h4>
          <br><br>

          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/505825/Pelotas-Tenis-22-63ac58059b9ec.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Musqui Pelota de Tenis Amarilla para Perros</h5>
                  <p class="price">₡1500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/015550/15550-cocodrilo-latex-35cm-con-sonido-trixie-perro-juguete-3529-h-1-g_1.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Trixie Cocodrilo Látex con Sonido</h5>
                  <p class="price">₡6000</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/169431/169431-8427458015936_0.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Nayeco Nudo con 2 Pelotas de Tennis Bicolor</h5>
                  <p class="price">₡3500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/021139/21139-50725_1_g.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Catit Senses Alfombrilla de Juegos</h5>
                  <p class="price">₡14700</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/072503/72503-134370-39759_1.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Trixie Guante De Juego Con Juguetes, Marrón</h5>
                  <p class="price">₡4500</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
          <div class="item">
            <figure>
              <img src="https://static.miscota.com/media/1/photos/products/167893/167893-4011905358543_0.jpg" alt="produco" class="img-normalizada">
            </figure>
            <div class="info-product">
                <div>
                  <h5>Trixie Tortuga de Peluche con Sonido</h5>
                  <p class="price">₡8000</p>
                  <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="1">
                  </form>
                </div>
            </div>
          </div>
        <div>
    </div>
</div>
<script src="assets/js/productos.js"></script>

</body>
<footer class="bg-dark">

   <div class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2">
       <div class="col-12">
           <div class="row my-4 row-1 no-gutters">
               <div class="col-sm-3 col-auto text-center"><small class="text-white">&#9400; Veterinaria Dr.Pet</small></div>
               <div class="col-md-3 col-auto"></div>
               <div class="col-md-3 col-auto"></div>
               <div class="col my-auto text-md-left text-right text-white"> <small> veterinariaDr.Pet@outlook.com <span><img src="https://i.imgur.com/TtB6MDc.png" class="img-fluid "  width="25"></span> <span><img src="https://i.imgur.com/N90KDYM.png" class="img-fluid "  width="25"></span></small>  </div> 
           </div>
       </div>
   </div>
</footer>
</html>