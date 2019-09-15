<?php session_start(); ?>
<!DOCTYPE html>
 <html lang="es">
<head>
    <title>Contacto - Reyes del Mueble</title>
    <link rel="shortcut icon" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
    <script src="js/vistart.js"></script>
</head> 
<body>        
		<?php include_once ('includes/header.php');?>
        <section id="section1">  
<div id="contenedor">
<form class="contact_form" id="contact_form">
        <div>
            <ul> 
                <li>
                    <h2 id="con">Contacto a Reyes del Mueble</h2>
                    <span class="required_notification">* Datos requeridos</span>
                </li>
                <li>
                    <label for="name">Nombre:</label>
                    <input id="n" type="text" required name="n">
                </li>
                <li>
                    <label for="name">Apellido:</label>
                    <input id="a" type="text" required name="a">
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input id="e" type="email" name="e" required>
                    <span class="form_hint">Formato correcto: "prueba@gmail.com"</span>
                </li>
                <li>
                    <label for="name">Telefono:</label>
                    <input type="text" required name="t" id="t">
                </li>
                                
                                <li>
                    <label for="name">Asunto:</label>
                    <select name="s" id="s">
                      <option value="0">Asunto</option>
                      <option value="1" required>Consulta</option>
                      <option value="2" required>Criticas</option>
                      <option value="3" required>Reclamo</option>
                      <option value="4" required>Datos Personales</option>
                      <option value="5" required>Otros</option>
                    </select>
                </li>
                <li>
                    <label for="message">Mensaje:</label>
                    <textarea id="m" name="m" cols="40" rows="6" required></textarea>
                </li>
                <li>
                    <button class="submit" type="submit" id="enviar" name="enviar">Enviar consulta</button><div id="respuesta"></div>
                </li>
            </ul>
        </div>
    </form>
    </div>
	</section>         
        <?php include ('includes/footer.php');?>
		<script src="js/contacto.js"></script>
</body>
</html>