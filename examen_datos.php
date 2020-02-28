<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOS NUMEROS MULTIPLICADOS SON:</title>
</head>
<body>
<?php 
//se declaran las variables con  los numeros ya ingresados en la pagina anterior (principal)

$num1 =  $_POST['num'];
$num2 =  $_POST['nume2'];

$res= $num1*$num2 //se realiza la multiplicacion de los datos obtenidos

 echo "EL NUMERO ES " , $num1;
 echo "EL MULTIPLICADOR " , $num2;
 echo " EL RESULTADO " , $res;
 ?>
</body>
</html>
