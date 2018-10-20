 <?php
class MySQL
{
var $host="localhost";
var $user="u687165544_fatec";
var $password="fatecanos2000";
var $database="u687165544_stage";

var $query;
var $link;
var $result;

 public function connect()
 {
 $this->link=mysqli_connect($this->host,$this->user,$this->password,$this->database);
 if(!$this->link)
 {
 echo "Falha na conexão com o Banco de Dados!<br />";
 echo "Erro: " . mysqli_error();
 }
 echo "<p>Conexão ok</p>";
 }

 public function executeQuery($query)
 {
 $this->connect();
 $this->query=$query;
 $this->result= mysqli_query($this->link,$this->query);
 if($this->result)
 {
 echo "<p>cad ok</p>";
 $this->disconnect(); 
 return $this->result;
 }
 else
 {
 echo "Ocorreu um erro na execução da SQL";
 
 echo "Erro :" . mysqli_error();
 echo "SQL: " . $query;
 
 disconnect();
 }
 }
 
 //Esta função desconecta do Banco ddd
 public function disconnect()
 {
 return mysqli_close($this->link);
 }
 }
 ?>