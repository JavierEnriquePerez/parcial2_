<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de registro</title>
</head>
<body>
    <?php
    $registros = array(
        array("id" => 1, "nombre" => "Juan" , "edad" => 25, "sexo"  => "M"),
        array("id" => 2, "nombre" => "Luis" , "edad" => 47, "sexo"  => "M"),
        array("id" => 3, "nombre" => "Maria" , "edad" => 37, "sexo"  => "F"),
        array("id" => 4, "nombre" => "Jose" , "edad" => 20, "sexo"  => "M"),
        array("id" => 5, "nombre" => "Angel" , "edad" => 60, "sexo"  => "M"),
        array("id" => 6, "nombre" => "Kevin" , "edad" => 50, "sexo"  => "M")
    ); 

    

    if (isset($_GET["id"])){
        $id = $_GET["id"]-1;
        echo "<h1>Datos de la persona</h1><hr>";
        echo "ID:" . $_GET["id"] . "<br>";
        echo "Nombre: ".$registros[$_GET["id"]]["nombre"]. "<br>";
        echo "Nombre: ".$registros[$_GET["id"]]["edad"]. "<br>";
        echo "Nombre: ".$registros[$_GET["id"]]["sexo"]. "<br>";

    }else{
        echo"<h1>El dato de ID es requerido</h1>";
    }

    ?>
</body>
</html>