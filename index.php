<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    
    <title>Anvorguesa - Inicio</title>
</head>

<body class="fondo-imagen">
    <header>
      <?php
        require_once('views/header.php');
      ?>
    </header>


<!-------------------------------------------------------------------------

                                        carousel


----------------------------------------------------------------------------------->

  <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slides/slide1_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slides/slide2_2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slides/slide3_3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




<!-------------------------------------------------------------------------

                                       fin carousel


----------------------------------------------------------------------------------->

<div class="container">
  <div class="clearfix" id="casilla">
    <img class="img2" src="img/hamburger1_1.png" width="350" height="382" alt="imagen de muestra, hamburguesa completa">
    <h1 class="resaltado">Hamburguesa completa</h1>
    <p class="cursiva">Hamburguesa completa llena de <strong class="blanco">SABOR</strong>, hecha con productos naturales y sin coneservantes.</p>
    <p class="cursiva">Perrrfecta para matar el hambre</p>
  </div>
</div>











  <footer class="footer">
    <?php
      require_once('views/footer2.php')
    ?>
  </footer>


</body>

</html>