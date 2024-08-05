<?php
 echo "<div class='alert alert-danger'>El usuario no existe</div> ";

session_start();
session_destroy();
header("location:/PLANTILLA-PHP/vista/login/login.php");
?>