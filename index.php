<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;1,100;1,200;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/684cf6df5c.js" crossorigin="anonymous"></script>
    <title>Prueba</title>    
    <!--Librerias para el header-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
</head>

<body>
    <?php
        include 'php/conexion.php';
        // $db = conectarBD();
        // $query='SELECT *FROM solicitudes;';
        // $resultado = mysqli_query($db, $query);
    ?>
    <!-- <header>
        <h2>Business In Motion</h2>
    </header> -->

    <nav class="navigation-menu navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="menu">
                <li><a href="#"><i class="fas fa-home"></i> </a></li>
                <li><a href="#"><i class="fas fa-calendar-day"></i> </a></li>
                <li><a href="#"><i class="fas fa-address-book"></i> </a></li>
                <li><a href="#"><i class="fas fa-edit"></i> </a></li>
                <li><a href="#"><i class="fas fa-poll"></i> </a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> </a></li>
                <li><a href="#"><i class="fas fa-user-circle"></i> </a></li>
            </ul>
            <div class="demo-content">
                    <div id="notification-header">
                        <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><i class="fas fa-bell" id="icono"></i>
                        <div id="notification-latest">

                        </div>       
                    </div>
                </div>
            <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
            <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
        </div>
    </nav>

    <div class="container">
      <div class="starter-template">
          <h1>Prueba de Solicitud</h1>
          <p class="lead">
              <form name="frmNotification" id="frmNotification" action="php/agregarnotificacion.php" method="post" >
                <div class="form-group">
                  <label for="autor">Nombre </label>
                  <input type="text" class="form-control" name="autor" id="autor" placeholder="Ingresa Nombre" required>
                </div>
                <div class="form-group">
                  <label for="mensaje">Fecha </label>
                  <input type="date" class="form-control" name="mensaje" id="mensaje">
                  <!-- <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea> -->
                </div>
                <div class="form-group">
                  <input type="submit" name="add" id="btn-send" value="Enviar">
                </div>
              </form>            
          </p>
        </div>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>
    
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>