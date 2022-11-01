<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Hamburguesas</title>
</head>

<body class="fondo-imagen">
    <header>
        <?php
           require_once('header2.php');
        ?>
    </header>


 
<center><h1 > Nuestras Mejores Anvorrrrrguesas  </h1></center>


   
<div class="news-cards"></div>
    <div class="news-cards">

     <img src="../img/kebab-1.png" alt="hamburgesa1" >
     <h2>Hamburguesa kebab</h2>
    
     <p>Hamburguesa de pollo con jamon queso tomate lechuga.</p>
     

     </div>

     <div class="news-cards">

<img src="../img/hamburger1.png" alt="hamburgesa2" >
<h2>Hamburguesa clasica</h2>
<p>Hamburguesa con lechuga tomate pepino cebolla queso chedar y una salsa muy especial.</p>


</div>

<div class="news-cards">

<img src="../img/hamburger2.png" alt="hamburgesa3" >
<h2>Hamburguesa simple</h2>
<p>Hamburguesa con pepino doble queso chedar cebolla mayonesa y kechup.</p>


</div>




    </div>
















    <footer class="footer">
       <?php
            require_once('footer.php')
        ?>
    </footer>

</body>

</html>