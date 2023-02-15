<?php
    session_start();
     if (!isset($_SESSION["usuario"])) {
        header("Location:formularioIniciaSesion.php");
     die();
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include "cabecera.php";
    ?>
</head>

<body>

<header>
    <?php
    include "contenido.php";
    ?>
</header>

<article>

    <?php
    include "procesa.php";
    ?>

</article>

<footer>

    <?php
    include "pie.php";
    ?>

</footer>

</body>

</html>