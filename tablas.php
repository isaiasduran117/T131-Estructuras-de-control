<!DOCTYPE html>
<html>
<head>
    <title>Tablas de multiplicar</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
</head>
    
    <H1 align=center>TABLAS DE MULTIPLICAR</H1>
    <H2 align=center>JOSÉ ISAÍAS DURAN EK</H2>
    <table id='tabla' border="1"><tr>
    <?php

function tablas($str) {
    switch ($str) {

case "for":     

for($x=1;$x<=10;$x++)
{

echo "<td id='cel'> tabla del $x<br/>";

for ($y=1;$y<=10;$y++)
{
$res=$x*$y;
echo "$x  X $y = $res<br/>";
}

}
    break;
    
case "while":

   $x=1;
while($x<=10)
{
echo "<td> tabla del $x<br/>";
$y=1;
while($y<=10)
{
$res=$x*$y;
echo "$x  X $y = $res<br/>";

    $y++;
}

$x++;
}

break;
    
case "do-while":

$x=1;
do
{
echo "<td> tabla del $x<br/>";

    $y=1;
do
{
$res=$x*$y;

echo "$x  X $y = $res<br/>";

$y++;
}while($y<=10);

$x++;
}while($x<=10);
break;
}
    return $str;
}

$estr=$_POST['opciones']; 



tablas($estr);





?>
        </tr></table>
</body>
</html>
