<?php
$conn = new mysqli("localhost","root","","bim");

$sql = "UPDATE solicitudes SET visto = 1 WHERE visto = 0";	
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM solicitudes ORDER BY id_solicitud DESC limit 5";
$result = mysqli_query($conn, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>"."<span>Usuario: </span>". $row["nombre"] . " <br> <span>Fecha: </span>". $fechaFormateada . "</div>" . 
	// "<div class='notification-comment'>" . $row["visto"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>