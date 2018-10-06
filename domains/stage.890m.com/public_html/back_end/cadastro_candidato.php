<?php
        include 'Conexão.php';  $conn = new CONEXAO();
        include 'Candidato.php';

        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cpf = $_POST['cpf'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $idade = $_POST['idade'];
        $faculdade = $_POST['faculdade'];
        $telefone = $_POST['telefone'];

        echo "Connected successfully";
        
        $sql = Candidato::insert($email,$pass,$cpf,$cidade,$estado,$idade,$faculdade,$telefone,$concorre);
        
        CONEXAO::Query($sql);
        

    /*public function insert($email)
    {
        include 'Conexão.php';  $O_Conexao = new CONEXAO();

        try
        {
            $stmt = $O_Conexao::prepare($sql);
            if($stmt->execute())
            {
                echo "INSERT!!";
            }
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();
        }

    }

    public function update($registro)
    {
        $sql  = "UPDATE CANDIDATOS SET var = :var, WHERE var = :var";
        try
        {
            $stmt = connectionDB::prepare($sql);
            if($stmt->execute()){
                echo "UPDATE!!";
            }
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();
        }
    }

    public function findAll()
    {
        $sql = "SELECT * FROM table";
        try
        {
            $stmt = connectionDB::prepare($sql);
            if($stmt->execute()){
                return $stmt->fetchAll(PDO::FETCH_CLASS,'table');
            }
            else {
             //   return new Class();
            }
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();
        }
    }

    public function createObject($r)
    {
        try{
         //   $var= new Class($r['var1'], $r['var2']);
            return $var;
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();   
        }
    }
}

/*
$servername = "localhost";
$database = "u687165544_stage";
$username = "u687165544_fatec";
$password = "fatecanos2000";
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$idade = $_POST['idade'];
$faculdade = $_POST['faculdade'];
$telefone = $_POST['telefone'];

$conn = mysqli_connect($servername, $username, $password, $database);



if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
 $statement = $pdo->prepare('INSERT INTO CANDIDATOS (EMAIL, SENHA, IDADE, CPF, CANDIDATO_CIDADE, CANDIDATO_ESTADO, FACULDADE, TELEFONE, CONCORRE) VALUES (:email, :pass, :idade, :cpf, :cidade, :estado, :faculdade, :telefone, :concorre)');

 if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("Location:../index.php");
}    

mysqli_close($conn);
 * 
 */
?>