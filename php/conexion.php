<?php

    $conn = new mysqli('localhost', 'root', '', 'bim');
    $count = 0;
    $sql2 = "SELECT * FROM solicitudes WHERE visto = 0";
    $result = mysqli_query($conn, $sql2);
    $count = mysqli_num_rows($result);
    
?>