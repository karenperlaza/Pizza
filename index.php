<html>
<head>
<title>Pizza</title>
<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="fonts.css">
</head>
<body>
<header class ="header">
<center><a href="#" class="logo"><img src="piza.jpg" width="150"  align="center"></center><center>Pizza Planeta</center></a>

	</header>


<BR>
<BR>


<main class="main">
 <div class="container">
<h1> <FONT COLOR ="TEAL"><CENTER> PEDIDO DE PIZZA</font></h1></center>
<form action="pagina2.php" method="post">
<body background ="fonfo.jpg">
<table border="2" bgcolor="#D6EAF8" style="margin:0 auto;">
<tr>
<td>NOMBRE :</td>
<td><input type="text" name="nombre"></td>
</tr>
<tr>

<td>DIRECCION :
<td><input type="text" name="dir"></td>
</tr>
<tr>

<td>TELÉFONO :
<td><input type="text" name="tel"></td>
</tr>
<tr>

<td>CORREO :
<td><input type="text" name="cor"></td>
</tr>
<tr>
<th colspan=2>TIPO DE PIZZA :</th></tr>
<tr>
<td><input type="checkbox" name="check1">Jamon y queso</td>
<br>
<tr>
<td>Cantidad :</td>
<td><input type="text" name="c1"></td>
</tr>
<br> 
<tr>
<br>
<td><input type="checkbox" name="check2">Napolitana</td>
<br></tr>
<td>Cantidad :</td>
<td><input type="text" name="c2"></td>
<br>
<tr>
<td><input type="checkbox" name="check3">Muzzarella</td>
<br>
</tr>
<td>Cantidad :</td>
<td><input type="text" name="c3"></td>
<br><br><br>
<tr>
<td><input type="submit" value="Enviar pedido"></td>

<br><br><td><a href=registro.php>Leer Datos</a><br></td>
</tr>
</table>
</form>
</div>
</main>
</body>
</html>