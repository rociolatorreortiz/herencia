<?php   

// include 'empleado.php';
include 'empleadoComision.php';

$Empleado = new empleado("Juan","Perez",2000000);
$EmpleadoComision = new empleadoComision("Maria", "Perez" , 800000, 30);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    
<?php
    echo "El señor ". $Empleado->getNombre()." ".$Empleado->getApellido() .
    " se gana ". $Empleado->getSalario(). "<br>";
   
    echo "La señora ". $EmpleadoComision->getNombre()." ".$EmpleadoComision->getApellido() .
    " se gana ". $EmpleadoComision->calcularPago();
?>

</body>
</html>
