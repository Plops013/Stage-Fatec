<?php
        
    include_once 'Connect.php';
    
    class User { 
        var $nome;
        var $pass;
        
    public function fazerLogin($email,$pass){
            include_once 'Empresa.php';
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
          $empresa = new Empresa();
          $e = $empresa->getEmpresa($email);
          session_destroy();
          setcookie("nome_fantasia", $e->nome_fantasia,time() + 3600,'/');
          setcookie("cnpj", $e->cnpj,time() + 3600,'/');
          setcookie("email", $email,time() + 3600,'/');
          setcookie("empresa", $email,time() + 3600,'/');
          header("Location:../Site/empresa/home2.php");
        }
    }    
    
    public function insert($email,$pass)
    {
        //Gera a string sql que sera utilizada na função create candidato
        $sql ="INSERT INTO USER (EMAIL, SENHA) VALUES ('$email', '$pass')";
        return $sql;
    }

        public function getUser($email){
                            $con = new MySQL;
                            $conn = mysqli_connect($con->host, $con->user, $con->password, $con->database);
                            $usuario =new User();
                            $sql = "SELECT * FROM USER";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {  
                                     if($email == $row["EMAIL"]){
                                        $usuario->senha = $row['SENHA'];
                                        $usuario->email = $row['EMAIL'];
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            return $usuario;
        }
    
        // variavel dados recebe a $_POST
        public function createCandidato($dados)
                {
        $email = $dados['email'];
        $pass = md5($dados['pass']);
        $c = new User();
        //gera a query
        $query = $c->insert($email, $pass);
        //faz a conexão
        $conn = new MySQL;
        //executa a query gerada
        $conn->executeQuery($query);
        //disconecta
        $conn->disconnect();
        session_start();
        //apenas para quando cadastrar exibir o nome do usuario cadastrado, feedback
        $_SESSION["username"] = $email;
        header("Location:../Site/loguin_msg.php");
        setcookie('cadastrou','1');
                }
                
        
    public function delete($email){
        $sql ="DELETE FROM USER WHERE EMAIL = '$email'";
        return $sql; 
    }
    
    }
 
    //verifica se houve algum request POST, ou seja, uma confirmação de formulario mandando para essa pagina
    // como no caso tanto a pagina alterar quanto a pagina criar enviam um comando post, se faz a verificação atraves
    // de um input hidden informando se é pra alterar ou cadastrar
    if(isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um *request* POST
        // variavel method = o input hidden do form
     $method = $_POST['method'];
     if( $method == "cadastrar" ){
        $c = new User();
        // envia um vetor $_POST, com todas informações do post
        $c->createUser($_POST);
     }
     if ($method == "logar" ){
     }
     else{
     }
    }


 