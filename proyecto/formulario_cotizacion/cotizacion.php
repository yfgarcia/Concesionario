<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario de cotización</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" type="text/css" href="estilo.css">
    <script src='main.js'></script>
</head>
<body>
    <form name="form" action="registro.php" method="post">
        
    	<h1>¡Cotizaciones!</h1>
        <input type="text" name="nombres" placeholder="Nombres"><p>
        <input type="text" name="apellidos" placeholder="Apellidos"><p>
        <input type="int" name="cedula" placeholder="Cedula"><p>
        <input type="text" name="direccion" placeholder="Direccion"><p>
        <input type="int" name="celular" placeholder="Celular"><p>
        <input type="int" name="telefono" placeholder="Telefono"><p>
        <input type="text" name="moto_interes" placeholder="Moto de interes"><p>
        <input type="submit" value="Registrar">
        <input type="reset" value="Borrar">
    </form>
    <?php
    include("registro.php")
    ?>
</body>
</html>