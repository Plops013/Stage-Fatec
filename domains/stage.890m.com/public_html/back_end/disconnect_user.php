<?php
echo "desconectado";

unset($_COOKIE['email']);
setcookie("email", "",time() -3600,"/");

unset($_COOKIE['empresa']);
setcookie("empresa", "",time() -3600,"/");

unset($_COOKIE['nome']);
setcookie("nome", "",time() -3600,"/");

unset($_COOKIE['nome_fantasia']);
setcookie("nome_fantasia", "",time() -3600,"/");

unset($_COOKIE['cnpj']);
setcookie("cnpj", "",time() -3600,"/");

unset($_COOKIE['candidato']);
setcookie("candidato", "",time() -3600,"/");

header("Location:../Site/home.php");
?>
