
<?php 

include("con_db.php");

if (isset($_POST['Registrar'])) {
    if (strlen($_POST['nombres']) >= 1 
            && strlen($_POST['apellidos']) >= 1
            && strlen($_POST['cedula']) >= 1
            && strlen($_POST['direccion']) >= 1
            && strlen($_POST['celular']) >= 1
            && strlen($_POST['moto_interes']) >= 1) {
	    $nombres = trim($_POST['nombres']);
	    $apellidos = trim($_POST['apellidos']);
	    $cedula = trim($_POST['cedula']);
	    $direccion = trim($_POST['direccion']);
	    $celular = trim($_POST['celular']);
	    $telefono = trim($_POST['telefono']);
	    $moto_interes = trim($_POST['moto_interes']);
	    $fecha_registro = date("d/m/y");
	    $consulta = "INSERT INTO cotizaciones(nombres, apellidos, cedula, direccion, 
                                                    celular, telefono, moto_interes, fecha_registro) 
                                VALUES ('$nombres','$apellidos','$cedula','$direccion','$celular',
                                            '$telefono','$moto_interes','$fecha_registro',)";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
        }   else {
                ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
        }
}

?>