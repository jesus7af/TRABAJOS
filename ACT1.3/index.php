<?php
$datos=array[24, 06, 09];
$n=count($datos);
for($i=0; $i<$n; $i++);
{
    echo $datos[$i], ",";
}
echo "<br> <br>";
sort($datos);
for($i=0; $i<$n; $i++);
{
    echo $datos[$i], ",";
}
echo "<br> <br>";
rsort($datos);
for($i=0; $i<$n; $i++);
{
    echo $datos[$i], ",";
}
echo "<br> <br>";
for($i=0; $i<$n; $i++);
{
    if ($datos[$i]%2==0)
    {
        echo $datos[$i], ",";
    }
}
echo "<br> <br>";
for($i=0; $i<$n; $i++);
{
    if($datos[$i]%2!=0)
    {
        echo $datos[$i], ",";
    }
}
?>