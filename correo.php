<?php 
//Datos del formulario modificado en servidor
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$observaciones=$_POST["observaciones"];

$mensaje="<h1 style='color:#3498db;'>$nombre</h1>";
$mensaje.="<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$mensaje.="<b>Email:</b> $email <br>";
$mensaje.="<b>Teléfono:</b> $telefono <br>";
$mensaje.="<b>Observaciones:</b> $observaciones<br>";

$para      = $email;
$titulo    = "Portafolio";
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: juaristi@areafor.com <br> Reply-To: juaristi@areafor.com';
mail($para, $titulo, $mensaje, $cabeceras);
header("Location:".$_SERVER['HTTP_REFERER']);
?>
