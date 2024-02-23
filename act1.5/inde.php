<?php

function generarCalificaciones($cantidad) {
    $calificaciones = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $calificaciones[] = rand(0, 10);
    }
    return $calificaciones;
}

function calcularPorcentaje($calificaciones) {
    $aprobados = 0;
    $reprobados = 0;
    foreach ($calificaciones as $calificacion) {
        if ($calificacion >= 6) {
            $aprobados++;
        } else {
            $reprobados++;
        }
    }
    $total_alumnos = count($calificaciones);
    $porcentaje_aprobados = ($aprobados / $total_alumnos) * 100;
    $porcentaje_reprobados = ($reprobados / $total_alumnos) * 100;
    return [
        'aprobados' => $porcentaje_aprobados,
        'reprobados' => $porcentaje_reprobados
    ];
}

function calcularPromedioYMayores($calificaciones) {
    $total_calificaciones = count($calificaciones);
    $suma_calificaciones = array_sum($calificaciones);
    $promedio = $suma_calificaciones / $total_calificaciones;
    
    $numeros_mayores_al_promedio = 0;
    foreach ($calificaciones as $calificacion) {
        if ($calificacion > $promedio) {
            $numeros_mayores_al_promedio++;
        }
    }
    
    return [
        'promedio' => $promedio,
        'mayores_al_promedio' => $numeros_mayores_al_promedio
    ];
}

$cantidad_alumnos = rand(1, 1000);
$calificaciones = generarCalificaciones($cantidad_alumnos);

$porcentajes = calcularPorcentaje($calificaciones);

$datos_extra = calcularPromedioYMayores($calificaciones);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Calificaciones de Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Calificaciones de Alumnos</h2>
    <table>
        <tr>
            <th>Número</th>
            <?php
            $count = 0;
            foreach ($calificaciones as $calificacion) {
                if ($count % 30 == 0 && $count != 0) {
                    echo "</tr><tr>";
                }
                echo "<td>$calificacion</td>";
                $count++;
            }
            ?>
        </tr>
    </table>
    <p>Cantidad de alumnos: <?php echo $cantidad_alumnos; ?></p>
    <p>Porcentaje de alumnos aprobados: <?php echo round($porcentajes['aprobados'], 2); ?>%</p>
    <p>Porcentaje de alumnos reprobados: <?php echo round($porcentajes['reprobados'], 2); ?>%</p>
    <p>Promedio de calificaciones: <?php echo round($datos_extra['promedio'], 2); ?></p>
    <p>Cantidad de calificaciones mayores al promedio: <?php echo $datos_extra['mayores_al_promedio']; ?></p>
</body>
</html>
