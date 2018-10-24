<?php

   $email = $_POST['email'];
    $senha = md5($_POST['pass']);
    
    $servername = "localhost";
    $database = "u687165544_stage";
    $username = "u687165544_fatec";
    $password = "fatecanos2000";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
        }
  
   $verifica = mysqli_query($conn, "SELECT * FROM EMPRESA WHERE EMAIL = '$email' AND SENHA = '$senha'");
      
        if (mysqli_num_rows($verifica)<=0){
          session_start();
          $_SESSION["pass_erro_empresa"] = "Login e/ou senha incorretos";
          header("Location:../Site/login_empresas.php");
          echo "Login e/ou senha incorretos";
          die();
        }else{
          session_start();
          echo "Logado com sucesso";
          session_destroy();
          setcookie("email", $email,time() + 3600,'/');
          setcookie("empresa", $email,time() + 3600,'/');
          header("Location:../Site/empresa/home2.php");
        }
        ?>