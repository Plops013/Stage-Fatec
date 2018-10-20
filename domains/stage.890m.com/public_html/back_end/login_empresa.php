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
          echo "Login e/ou senha incorretos";
          die();
          header("Location:../Site/home.php");
        }else{
          echo "Logado com sucesso";
          setcookie("email", $email,time() + 3600,'/');
          setcookie("empresa", $email,time() + 3600,'/');
          header("Location:../Site/home2.php");
        }
        
        ?>