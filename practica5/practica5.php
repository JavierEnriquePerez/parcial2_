<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 5. Intercambii de variable PHP</title>
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
    ?>
    <h1>Tabla de registros</h1>
    <table border=1>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Sexo</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i=0; $i < count($registros); $i++) { 
                    echo "<tr>";
                        echo "<td>" .$registros[$i]["id"]."</td>";
                        echo "<td>" .$registros[$i]["nombre"]."</td>";
                        echo "<td>" .$registros[$i]["edad"]."</td>";
                        echo "<td>" .$registros[$i]["sexo"]."</td>";
                        echo "<td><a href='practica5_detalle.php?id=".$registros[$i]["id"]."'>Ver detalles</a></td>";
                    echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>