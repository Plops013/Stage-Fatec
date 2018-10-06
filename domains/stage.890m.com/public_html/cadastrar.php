<?php
$servername = "localhost";
$database = "u687165544_stage";
$username = "u687165544_fatec";
$password = "fatecanos2000";
$login = $_POST['login'];
$cpf = $_POST['cpf'];
$passusr = md5($_POST['senha']);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO usuarios (login, senha, CPF) VALUES ('$login', '$passusr', '$cpf')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header("Location:index.php");
?>