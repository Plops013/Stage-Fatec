<?php
echo "desconectado";
unset($_COOKIE['email']);
setcookie("email", "",time() -3600,"/");

unset($_COOKIE['empresa']);
setcookie("empresa", "",time() -3600,"/");


unset($_COOKIE['candidato']);
setcookie("candidato", "",time() -3600,"/");
header("Location:../Site/home.php");
?>
