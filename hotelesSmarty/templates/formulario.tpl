<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
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

<body>
{if isset($exito)}
	{$exito}
{/if}

<a href="{$enlaceListado}">Todos los Hoteles</a>

<form action="insertaRegistros.php" method="post" name="formulario">
	<label for="nombre">Nombre del hotel</label>
    <input type="text" id="nombre" name="nombre" size="15" maxlength="40"/>
    <br />
	<label for="direccion">Direcci&oacute; del hotel</label>
    <input type="text" id="direccion" name="direccion" size="15" maxlength="60"/>
    <br />
	<label for="telefono">Tel&eacute;fono del hotel</label>
    <input type="text" id="telefono" name="telefono" size="15" maxlength="9"/>
    <br />
	<label for="anio">A&ntilde;o de construcci&oacute;n</label>
    <input type="text" id="anio" name="anio" size="15" maxlength="60"/>
    <br />
    <label for="categoria">Categor&iacute;a</label>
    <select name="categoria" id="categoria">
<!--DEBEMOS PROPORCIONAR UNA VARIABLE QUE RECORRER PARA SACAR LAS CATEGORÍAS-->

		{foreach $categorias as $valor}

			<option value="{$valor.id_categoria}">{$valor.categoria}</option>

		{/foreach}

	</select><br />

    <input type="submit" value="Enviarmelo"  />
    <input type="reset" value="Resetea" />
    
</form>




</body>
</html>
