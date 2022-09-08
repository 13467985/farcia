<?php
ssesion_start();
session_destroy();
header('Location: ../vista/login.php')

?>