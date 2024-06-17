<?php
$p1=$_POST['produccion1'];
$p2=$_POST['produccion2'];
$p3=$_POST['produccion3'];
$p4=$_POST['produccion4'];
$p5=$_POST['produccion5'];
$promedio=($p1+$p2+$p3+$p4+$p5)/5;
$produc=$p1+$p2+$p3+$p4+$p5;
echo'el promedio del turno es: '.$promedio;
echo'la produccion total es: '.$produc;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>