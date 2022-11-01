<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <title>Mensaje Recibido</title>
    <link rel="shortcut icon" href="../img/anvorguesaicon.png">
</head>

<body class="fondo-imagen">
    <header>
        <?php
           require_once('header2.php');
        ?>
    </header>

	<section>
    
        <h1>Gracias por ponerse en contacto</h1>

        <p>

            En la brevedad nos comunicaremos con usted.

        </p>

        <br>

        <p>
            
            Sus datos:
            
        </p>
        <?php
            // llega desde el formulario
            // 3 datos: nombre, email y comentarios


            $destino = "dueño@sitio.com"; //guardamos en una variable el correo que recibirá el mensaje
            $asunto = "Consulta desde el sitio"; //ASUNTO del mensaje


            $nombre1 = $_GET["nombre1"];
            $apellido1 = $_GET["apellido1"];
            $email = $_GET["email"];
            $opciones = $_GET["opciones"];
            $comentario = $_GET["comentario"];


            $cuerpo = "Consulta recibida de ".$_GET["nombre1"]." ".$_GET["apellido1"]. " su mail es ".$_GET["email"]. " su opción elegida fue: ".$_GET["opciones"]. " y su mensaje fue: ".$_GET["comentario"]; //En esta variable guardamos todo lo que ingreso el usuariio para mostrarlo en el cuerpo del correo

            $cabeceras = "From: $nombre1 $apellido1 <$email>";

            if (mail($destino,$asunto,$cuerpo,$cabeceras) ){  //mail() es una palabra reservada de PHP que que requiere 3 variables/parametros para poder funcionar en este orden: DESTINO, ASUNTO, CUERPO/CONTENIDO (se puede agregar una 4 variable/parametro con más contenido)  
                
                echo "Gracias por su consulta";
                echo "<br>";
                echo $cuerpo;

            } else {

                echo "No se pudo, intente mas tarde";
                echo "<br>";
                echo $cuerpo;	

            }


            ?>
	
	
    </section>

    <footer class="footer fixed-bottom">
       <?php
            require_once('footer.php')
        ?>
    </footer>

</body>

</html>