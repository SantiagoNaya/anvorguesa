<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos.css">
    <title>Contacto</title>
    <link rel="shortcut icon" href="../img/anvorguesaicon.png">
</head>

<body class="fondo-imagen">
    <header>
        <?php
           require_once('header2.php');
        ?>
    </header>
<div>

<!--     <form action= "recibir.php " method= "Get" >
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputnumber" class="form-label">Teléfono</label>
        <input name="numero" type="number" class="form-control" id="exampleInputnumber">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
-->
<form name="fvalida" method="Get" action="recibir.php" class="position-absolute start-50 translate-middle-x" id="topardo" >
    <div>

        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre1" required />
    
    </div>
    <div>
        
        <label for="nombre">Apellido:</label>
        <input id="nombre" type="text" name="apellido1" required />
    
    </div>
    <div>

        <label for="exampleInputEmail1" class="form-label">Correo:</label> 
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required />

    </div>
    <!--<div>
        <label>Edad:
            <input type="text" name="edad1" required />
        </label>
    </div>
    -->
    
<label>Opciones:</label>
<select name="opciones">
    <option value="Hamburguesa kebab">Hamburguesa kebab</option>
    <option value="Hamburguesa clasica">Hamburguesa clasica</option>
    <option value="Hamburguesa simple">Hamburguesa simple</option>
</select>
<div> 
    <label for="comentario">Deje aquí su comentario:</label>
    <textarea class="form-control" id="comentario" name="comentario" required></textarea>
</div> 

<div>
    <input type="checkbox" required/> Acepto terminos y condiciones
</div>

<button type="submit" class="btn btn-primary" value="Enviar"  onclick="valida_envia()">Enviar</button>
<!--<input type="submit" value="Enviar"  onclick="valida_envia()"/> -->



</form>

<script type="text/javascript">
function valida_envia(){
    //validar nombre1
    if(document.fvalida.nombre1.value.length==0){
        alert("No escribió su Nombre")
        document.fvalida.nombre1.focus()
        return 0;
    }else {
        //alert(document.fvalida.nombre1.value)
    }
    if(document.fvalida.apellido1.value.length==0){
        alert("No escribió su Apellido")
        document.fvalida.apellido1.focus()
        return 0;
    }else {
        //alert(document.fvalida.apellido1.value)
    }
    if(document.fvalida.email.value.length==0){
        alert("No escribió su email")
        document.fvalida.email.focus()
        return 0;
    }else {
        //alert(document.fvalida.nombre.value)
    }

if(document.fvalida.opciones.selectedIndex==0){
    alert("Seleccione una opción")
    document.fvalida.opciones.focus()
    return 0;

    }

}
if(document.fvalida.comentario.value.length==0){
        alert("No escribió su comentario")
        document.fvalida.comentario.focus()
        return 0;
    }else {
        //alert(document.fvalida.nombre.value)
    }

</script>
 
</div>

    <footer class="footer fixed-bottom">
       <?php
            require_once('footer.php')
        ?>
    </footer>


</body>

</html>