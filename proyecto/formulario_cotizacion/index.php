<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<header>
        <div class="encabezado">
            <nav>
                <nav>
                    <div class="logo">
                        <img src="imagenes/Logo.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li>
                            <a href="">Catalogo</a>
                            <ul>
                                <li><a href="../pagina2_kawasaki.html">kawasaki</a></li>
                                <li><a href="../pagina1_ktm.html">KTM</a></li>
                                <li><a href="../pagina3_susuki.html">Susuki</a></li>
                                <li><a href="../pagina4_yamaha.html">Yamaha</a></li>
                            </ul>
                        </li>
                        <li><a href="formulario_cotizacion/index.php">Cotizaciones</a></li>
                        <li><a href="">Conocenos</a></li>
                    </ul>
                </nav>
            </nav>
        </div>
    </header>
	
    <form method="post">
    	<h1>¡Cotiza con nosotros!</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="text" name="cedula" placeholder="Cedula">
    	<input type="text" name="direccion" placeholder="Direccion">
    	<input type="text" name="celular" placeholder="Celular">
    	<input type="email" name="email" placeholder="Email">
    	<input type="text" name="interested_mtcl" placeholder="Moto de interes">
    	<input type="submit" name="register">
    	<input type="reset" name="erase">
    </form>
        <?php 
        include("registrar.php");
        ?>


    <!-- CAMBIOS DANIELA-->

    <div class="textoredes">
        <h1>SBK RACING</h1>
        <p>Copyright © 2022 SBK Motor Racing – A Sole Shareholder Company - A Company subject to the Management and
            Coordination
            activities of AUDI AG. All rights reserved. VAT 05113870967</p>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="">
        <ul>
            <div class="redes">
                <h3>Siguenos</h3>
                <hr>
                <ul class="social">
                    <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                    <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                    <li><a href="https://co.pinterest.com/" class="fa fa-pinterest"></a></li>
                    <li><a href="https://www.youtube.com/" class="fa fa-youtube"></a></li>
                    <li><a href="https://mail.google.com/" class="fa fa-envelope-o"></a></li>
                </ul>

            </div>

            <div class="contactos">
                <h3>Contáctenos</h3>
                <hr>
                <ul class="social">
                    <li><a href="#" class="fa fa-phone"></a></li>
                    <p>3142844877 - 01800</p>
                </ul>
                <ul class="social">
                    <li><a href="#" class="fa fa-envelope-o"></a></li>
                    <p>superbike@gmail.com</p>
                </ul>
            </div>
        </ul>
        <hr>
        
    </div>
		
</body>
</html>