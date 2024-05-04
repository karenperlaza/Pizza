<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
class pizza {
private $nombre;
private $dir;
private $tel;
private $cor;
private  $c1;
private $c2;
private $c3;
private $string1;
private $string2;
private $string3;
 public function __construct($string1,$string2,$string3,$nombre,$dir,$tel,$cor,$c1,$c2,$c3)
  {
    $this->string1=$string1;
    $this->string2=$string2;
    $this->string3=$string3;
    $this->nombre=$nombre;
    $this->dir=$dir;
	$this->tel=$tel;
    $this->cor=$cor;
    $this->c1=$c1;
    $this->c2=$c2;
    $this->c3=$c3;
  }

  public function archivo()
  {
$ar=fopen("pedidos.txt","a") or
die("Problemas en la creacion");
fputs($ar,$_REQUEST['nombre']);
fputs($ar,$_REQUEST['dir']);
fputs($ar,$_REQUEST['tel']);
fputs($ar,$_REQUEST['cor']);
fputs($ar,"\n");
if (isset($_REQUEST['check1']))
{
  fputs($ar,$this->string1);
  fputs($ar,$_REQUEST['c1']);
  fputs($ar,"\n");

}
if (isset($_REQUEST['check2']))
  {
    fputs($ar,$this->string2);
    fputs($ar,$_REQUEST['c2']);
    fputs($ar,"\n");
  }

  if (isset($_REQUEST['check3']))
  {
    fputs($ar,$this->string3);
    fputs($ar,$_REQUEST['c3']);
    fputs($ar,"\n");
  }


fputs($ar,"--------------------------------------------------------");
fputs($ar,"\n");
fclose($ar);
echo "Los datos se cargaron correctamente.";
}
}
$objpizza=new pizza('PIZZA JAMON Y QUESO','PIZZA NAPOLITANA','PIZZA MUZZARELLA',$_REQUEST['nombre'],$_REQUEST['dir'],$_REQUEST['tel'],$_REQUEST['cor'],$_REQUEST['c1'],$_REQUEST['c2'],$_REQUEST['c3'] );
$objpizza->archivo();
?>
<br><a href=pagina1.php>Inicio</a><br>
</body>
</html>
