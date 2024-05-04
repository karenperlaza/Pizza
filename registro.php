<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
class registro {
	 public function leer_archivo()
  {
$ar=fopen("pedidos.txt","r") or
  die("No se pudo abrir el archivo");
while (!feof($ar))
{
  $linea=fgets($ar);
  $lineasalto=nl2br($linea);
  echo $lineasalto;
}
fclose($ar);
  }
}
$objleer=new registro();
$objleer->leer_archivo();
?>
<br><a href=pagina1.php>Inicio</a><br>
</body>
</html>
