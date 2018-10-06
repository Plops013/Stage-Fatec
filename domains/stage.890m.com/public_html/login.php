<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
    $servername = "localhost";
    $database = "u687165544_stage";
    $username = "u687165544_fatec";
    $password = "fatecanos2000";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
        }
 
    echo "Connected successfully";

      $verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
      
        if (mysqli_num_rows($verifica)<=0){
          echo "Login e/ou senha incorretos";
          die();
        }else{
          echo "Logado com sucesso";
          setcookie("login",$login);
          header("Location:index.php");
        }
    
?>