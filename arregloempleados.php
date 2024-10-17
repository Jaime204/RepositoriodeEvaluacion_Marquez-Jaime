<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
</head>
<body>

<?php
$empleados = array(
    array("nombre" => "Jaime", "sueldo" => rand(5000,10000)),
    array("nombre" => "Valeria", "sueldo" => rand(5000,10000)),
    array("nombre" => "Luis", "sueldo" => rand(5000,10000)),
    array("nombre" => "Said", "sueldo" => rand(5000,10000)),
    array("nombre" => "Carlos", "sueldo" => rand(5000,10000))
);


echo "Sueldos antes de ordenar:<br>";
foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado["nombre"] . " es " . $empleado["sueldo"] . "<br>";
}


usort($empleados, function($a, $b) {
    return $b["sueldo"] <=> $a["sueldo"];
});


echo "<br>Sueldos después de ordenar:<br>";
foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado["nombre"] . " es " . $empleado["sueldo"] . "<br>";
}


array_push($empleados, array("nombre" => "Jorge", "sueldo" => rand(5000,10000)));
array_push($empleados, array("nombre" => "David", "sueldo" => rand(5000,10000)));


echo "<br>Sueldos después de agregar nuevos empleados:<br>";
foreach ($empleados as $empleado) {
    echo "El sueldo de " . $empleado["nombre"] . " es " . $empleado["sueldo"] . "<br>";
}
?>
</body>
</html>