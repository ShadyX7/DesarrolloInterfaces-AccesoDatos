<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
  <title>Listado Hoteles</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
include_once("datos.php");
include_once("funcionesBBDD.php");
if(isset($_GET["exito"])){
	if ($_GET["exito"] == true){
		echo("<h2> La modificaci&oacute;n se realiz&oacute; con &eacute;xito</h2>");
	}
	if ($_GET["exito"] == false){
			echo("<h2> Problemas en la modificaci&oacute;n </h2>");
	}

}
if(isset($_GET["exitoBaja"])){
	if ($_GET["exitoBaja"] == true){
		echo("<h2> La baja del hotel  se realiz&oacute; con &eacute;xito</h2>");
	}
	if ($_GET["exitoBaja"] == false){
			echo("<h2> Problemas en la baja del hotel </h2>");
	}

}


$enlaceServidor = conectar($server,$user,$password);
seleccionBBDD($baseDatos, $enlaceServidor);

$query = "SELECT hotel.*, categoria.* FROM hotel, categoria WHERE hotel.id_categoria = categoria.id_categoria";

$todosRegistros = ejecutaQuery($query, $enlaceServidor);
echo("<table border = '1'>");
while($fila = mysql_fetch_array($todosRegistros,MYSQL_BOTH)){
	echo("<tr>");
		echo("<td>".$fila["nombre"]."</td>");
		echo("<td>".$fila["direccion"]."</td>");
		echo("<td>".$fila["telefono"]."</td>");
		echo("<td>".$fila["anio_construccion"]."</td>");
		echo("<td>".$fila["categoria"]."</td>");
		
		$nombreHotel = urlencode($fila["nombre"]);
		echo('<td><a href=\'formularioModifica.php?idHotel='.$nombreHotel.'\'>');
		
			echo("<img src='img/El_Fary.png' width='50px' height='50px' />");
		echo("</a>");
		echo("</td>");
		echo('<td><a href=\'bajaHotel.php?idHotel='.$nombreHotel.'\'>');
		
			echo("<img src='img/borrar.jpg'.png' width='50px' height='100px' />");
		echo("</a>");
		echo("</td>");
	echo("</tr>");
		
	}
echo("</table>");
echo('<a href=\'formulario.php\'>Insertar Hotel</a>');
		

cierraConexion($enlaceServidor);	
?>