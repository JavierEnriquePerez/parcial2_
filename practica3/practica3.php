<?php

    $nombre = $_GET["nombre"];

    echo "El nombre del cliente es:" . "<br>" . $nombre; 

    $edad = $_GET["edad"];

    echo  "<br>" ."<br>" . "La edad del cliente es:" . "<br>"  . $edad;

    $correo = $_GET["correo"];

    echo  "<br>" ."<br>" . "El correo del cliente es:" . "<br>"  . $correo;
    
    $fecha_nacimiento = $_GET["fecha_de_nacimiento"];

    echo  "<br>" ."<br>" . "La fecha de nacimiento del cliente es:" . "<br>"  . $fecha_nacimiento;

    $sexo = $_GET["sexo"];

    echo  "<br>" ."<br>" . "El genero del cliente es: <br>" . $sexo ;

   
    $areas = $_GET["areas"];
    
    echo "<br> <br>Areas de preferencia:<br>";
    for ($i=0; $i < count($areas); $i++) { 
        echo $areas[$i] . "<br>";
    }
    echo "<h1>Javier Enrique Perez Sosa</h1>"

?>