<?php
session_start();
session_destroy();
header("Location:formularioIniciaSesion.php");
die();
?>