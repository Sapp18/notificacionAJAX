<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Prueba</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;1,100;1,200;1,700&display=swap" rel="stylesheet">
    <!--Librerias para el header-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
</head>

<body>
    <?php
        include 'conexion.php';
        $db = conectarBD();
        $query='SELECT *FROM solicitudes;';
        $resultado = mysqli_query($db, $query);
    ?>
    <header>
        <div>
            <h2>Business In Motion</h2>
            <nav class="navigation-menu">
                <ul class="menu">
                    <li><a href="#"><i class="fas fa-home"></i> </a></li>
                    <li><a href="#"><i class="fas fa-calendar-day"></i> </a></li>
                    <li><a href="#"><i class="fas fa-address-book"></i> </a></li>
                    <li><a href="#"><i class="fas fa-edit"></i> </a></li>
                    <li><a href="#"><i class="fas fa-poll"></i> </a></li>
                    <li><a href="#"><i class="fas fa-cogs"></i> </a></li>
                    <li><a href="#"><i class="fas fa-user-circle"></i> </a></li>
                    <li class="size"><a href="#"><i class="menu-toggle-btn fas fa-bell btn-notificacion"></i></a>
                        <ul id="global" class="submenu">

                            <?php while ($filas=mysqli_fetch_assoc($resultado)){ ?>
                                
                                <li><a href="#"><p ><?php echo $filas['nombre']; ?> te envió solicitud el día <?php echo $filas['fecha']; ?></p></a></li>
                                
                            <?php } ?>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>