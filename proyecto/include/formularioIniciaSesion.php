<!DOCTYPE html>
<html lang="es">

  <head>


      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel='stylesheet' href='../css/estilo.css' title='Color'>
      <title>Inicio de sesion</title>

  </head>

  <body>
    <?php
    
      session_start();
      if (isset($_POST['usuario']) && isset($_POST['pasword'])) {  
       if($fp =fopen("passwd.txt", "r")){
         while (!feof($fp)) {
          $linea = fgets($fp);
          $usuario = explode(":", $linea)[0];
          $pasword = explode(":", $linea)[1];
          $nombre = explode(":", $linea)[2];
        if ($_POST['usuario'] == $usuario && $_POST['pasword'] == $pasword) {
          $_SESSION['usuario']=$nombre;
          header("Location:index.php");
          die();
          }
       
        }
       
        print "Ningun usuario encontrado";
      
      }
     
    }

    ?>
    <div class="sesion">
     
      <h1>Introduce tus datos para acceder.</h1>
      <form action="formularioIniciaSesion.php" method="post" id="formularioSesion">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">
        <label for="pasword">Contraseña:</label>
        <input type="password" id="pasword" name="pasword">
        <button type="submit">Enviar</button>
      <button type="reset">Borrar</button>
      </form>
        <a href="formularioRegistro.php" id="enlaceSesion">Registrate!</a>

    </div>
  </body>

</html>