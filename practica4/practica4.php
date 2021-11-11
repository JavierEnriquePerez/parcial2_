<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mini examen  en php</title>
</head>
<body style="background-image: url(Sonylover.jpg)" style="background-position: center">
	
<?php 
	
	$cal = 0;

	$Nombre_a = $_GET['nombre'];
	echo "<br> El nombre del alumno es: " . $Nombre_a;


	$Pregunta_1 = $_GET['Pregunta_1'];
	$resp_1 = "America";
	if ($Pregunta_1 == $resp_1) {
	
		$cal++;
	} 
	$Pregunta_2 = $_GET['Pregunta_2'];
	if ($Pregunta_2 == "32") {
	
		$cal++;
	} 
    $Pregunta_3 = $_GET["Pregunta_3"];
    $resp2 = "Aeolus";
     if ( $Pregunta_3 == $resp2) {
    	$cal++;
    }
    $Pregunta_4 = $_GET["Pregunta_4"];
     $resp3 = "lenguaje";
     if ( $Pregunta_4 == $resp3) {
    	$cal++;
    }
     $Pregunta_5 = $_GET["Pregunta_5"];
    if ($Pregunta_5 == "agua") {
    	
    	$cal++;
    } 
    $Pregunta_6 = $_GET["Pregunta_6"];
      if ( $Pregunta_6 == "chipote") {
      
      $cal++;
    }
     $Pregunta_7 = $_GET["Pregunta_7"];
     if ($Pregunta_7 == "1") {
    	
    	$cal++;
    } 
    if ($Pregunta_7 == "2") {
    	
    	$cal++;
    } 
     $Pregunta_8 = $_GET["Pregunta_8"];
     if ( $Pregunta_8 == "1") {
      
      $cal++;
    } 
    if ($Pregunta_8 == "2") {
    	
    	$cal++;
    } 
    if ($Pregunta_8 == "3") {
    	
    	$cal++;
    } 

    $Pregunta_9 = $_GET["Pregunta_9"];
     if ($Pregunta_9 == "1") {
	$cal++;
     
    }if ($Pregunta_9 == "2") {
     $cal++;
     }
    if ($Pregunta_9 == "3") {
     $cal++;
       }

    $Pregunta_10 = $_GET["Pregunta_10"];
    $resp10 = "a";
    if ( $Pregunta_10 == $resp10) {
    	
    	$cal++;
    	 }
    echo "<br>"."<br>"." Tu calificacion es: " ."<br>"."<br>". "$cal/10";

    echo "<h1> Javier Enrique Perez Sosa</h1>"
?>
 </body>
</html>