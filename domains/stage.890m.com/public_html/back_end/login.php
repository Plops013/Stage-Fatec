<?php
    
    include_once 'Candidato.php';
    
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
  
   $verifica = mysqli_query($conn, "SELECT * FROM CANDIDATOS WHERE EMAIL = '$email' AND SENHA = '$senha'");
      
        if (mysqli_num_rows($verifica)<=0){
          echo "Login e/ou senha incorretos";
          session_start();
          $_SESSION["pass_erro"] = "Login e/ou senha incorretos";
          header("Location:../Site/login_candidatos.php");
          die();
        }else{
          $c = new Candidato();
          $empresa = $c->getCandidato($email);
          session_start();
          echo "Logado com sucesso";
          session_destroy();
          setcookie("email", $email,time() + 3600,'/');
          setcookie("nome", $empresa->nome,time() + 3600,'/');
          setcookie("candidato", $email,time() + 3600,'/');
          header("Location:../Site/home2.php");
        }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

