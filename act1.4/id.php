<html>
<head></head>
<body>
<h1>Estaciones del año</h1>

<h2>Descripción</h2>
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
 y un mes 
 según lo siguiente:

Winter del 21 de diciembre al 20 de marzo
Spring del 21 de marzo al 21 de junio
Summer del 22 de junio al 22 de septiembre
Fall del 23 de septiembre al 20 de diciembre
Considerando la siguiente cantidad de días para cada mes:

Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días
Abril, Junio, Septiembre y Noviembre 30 días
Febrero 28 días
Cualquier fecha fuera de estos rangos debe considerarse como no existente

<h2>Entrada</h2>
Dos números enteros 
 y separados por un espacio que corresponden al día y mes de una fecha determinada

<h2>Salida</h2>
Una cadena 
 que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida.
<h2>    </h2>

 
<?php
function determinarEstacion($mes) {
    switch ($mes) {
        case 1:
        case 2:
        case 12:
            return "Invierno";
        case 3:
        case 4:
        case 5:
            return "Primavera";
        case 6:
        case 7:
        case 8:
            return "Verano";
        case 9:
        case 10:
        case 11:
            return "Otoño";
        default:
            return "fecha invalida";
    }
}

$dia = 15;
$mes = 4; 

$ultimo_dia_mes = date('t', mktime(0, 0, 0, $mes, 1, date('Y')));
if ($dia < 1 || $dia > $ultimo_dia_mes) {
    echo "Fecha invalida.\n";
} else {
    $estacion = determinarEstacion($mes);
    echo "La fecha ingresada corresponde a la estación: $estacion\n";
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Ingrese tres números:</h2>
    <h2>Descripción</h2>
Realiza un problema que imprima el mayor de tres números.

<h2>Entrada</h2>
Tres numero ingresados a, b, c.

<h2>Salida</h2>
El número entero mayor de los tres números introducidos.
<h2>    </h2>

    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        
        $max = $num1;
        
        if ($num2 > $max) {
            $max = $num2;
        }
        
        if ($num3 > $max) {
            $max = $num3;
        }
        
        echo "<h2>El mayor de los tres números es: $max</h2>";
    }
    ?>
</body>
</html>
