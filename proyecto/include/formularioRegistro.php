<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' href='../css/estilo.css' title='Color'>
            <title>Formulario Inicio de sesion</title>

</head>

    <body>
        <?php
            session_start();
        ?>
    <div class="sesion">
        <h1>Registrate.</h1>
        <form action="formularioRegistro.php" method="post" id="formularioRegistro">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario">
            <label for="pasword">Contraseña:</label>
            <input type="password" id="pasword" name="pasword">
            <label for="pasword2">Repite contraseña:</label>
            <input type="password" id="pasword2" name="pasword2">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <button type="submit">Enviar</button>
            <button type="reset">Borrar</button>
        </form>
    </div>
    
        <?php

        if (isset($_POST['usuario']) && isset($_POST['pasword'])&& isset($_POST['pasword2']) && isset($_POST['nombre'])){
            $valido = false;
   
       if ($_POST['usuario']!="" && $_POST['nombre']!="" && ($_POST['pasword']==$_POST['pasword2']) ) {
            $valido = true;
            }
            if($fp =fopen("passwd.txt", "r")){
                while (!feof($fp)) {
                $linea = fgets($fp);
                $usuario = explode(":", $linea)[0];
        
            if ($_POST['usuario']==$usuario) {
               $valido=false;
               break;
            }
            }
        }

         if ($valido) {
            $fp = fopen("passwd.txt", "a+");
            fwrite($fp, $_POST['usuario'].":".$_POST['pasword'].":".$_POST['nombre'].PHP_EOL);
            fclose($fp);
            header("Location:formularioIniciaSesion.php");
              die();
        }else{
            print "Datos no validos";
        }
        
    }
       
    ?>
  
</body>
</html>