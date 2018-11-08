<?php
        
    include_once 'Connect.php';
    
    class Candidato { 
        var $nome;
        var $email;
        var $pass;
        var $cpf;
        var $cidade;
        var $estado;
        var $idade;
        var $faculdade;
        var $telefone;
    
    public function insert($email,$pass,$cpf,$cidade,$estado,$idade,$faculdade,$telefone,$nome)
    {
        //Gera a string sql que sera utilizada na função create candidato
        $sql ="INSERT INTO CANDIDATOS (EMAIL, SENHA, IDADE, CPF, CANDIDATO_CIDADE, CANDIDATO_ESTADO, FACULDADE, TELEFONE, NOME) VALUES ('$email', '$pass', '$idade', '$cpf', '$cidade', '$estado', '$faculdade', '$telefone','$nome')";
        return $sql;
    }
    
        public function alterar($cpf_antigo,$email,$pass,$cpf,$cidade,$estado,$idade,$faculdade,$telefone,$nome)
    {
            $sql ="UPDATE CANDIDATOS"
                . " SET EMAIL = '$email', SENHA = '$pass', IDADE = '$idade', CPF = '$cpf', CANDIDATO_CIDADE = '$cidade', CANDIDATO_ESTADO = '$estado', FACULDADE = '$faculdade', TELEFONE = '$telefone', NOME = '$nome'"
                . " WHERE CPF = '$cpf_antigo'";
        return $sql;
    }
    
        public function getCandidato($email){
            
                            $con = new MySQL;
                            $conn = mysqli_connect($con->host, $con->user, $con->password, $con->database);
                            $candidato =new Candidato();
                            
                            $sql = "SELECT * FROM CANDIDATOS";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {  
                                     if($email == $row["EMAIL"]){
                                        $candidato->nome = $row['NOME'];
                                        $candidato->cpf = $row['CPF'];
                                        $candidato->email = $row['EMAIL'];
                                        $candidato->idade = $row['IDADE'];
                                        $candidato->telefone = $row['TELEFONE'];
                                        $candidato->cidade = $row['CANDIDATO_CIDADE'];
                                        $candidato->estado = $row['CANDIDATO_ESTADO'];
                                        $candidato->faculdade = $row['FACULDADE'];   
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            return $candidato;
        }
    
        // variavel dados recebe a $_POST
        public function createCandidato($dados)
                {
        $nome = $dados['nome'];
        $email = $dados['email'];
        $pass = md5($dados['pass']);
        $cpf = $dados['cpf'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $idade = $dados['idade'];
        $faculdade = $dados['faculdade'];
        $telefone = $dados['telefone'];
        //cria um novo objeto candidato
        $c = new Candidato;
        //gera a query
        $query = $c->insert($email, $pass, $cpf, $cidade, $estado, $idade, $faculdade, $telefone, $nome);
        //faz a conexão
        $conn = new MySQL;
        //executa a query gerada
        $conn->executeQuery($query);
        //disconecta
        $conn->disconnect();
        session_start();
        //apenas para quando cadastrar exibir o nome do usuario cadastrado, feedback
        $_SESSION["username"] = $nome;
        header("Location:../Site/loguin_msg.php");
        setcookie('cadastrou','1');
                }
                
        public function alterCandidato($dados)
        { 
            //apaga os cookies com os dados antigos
        unset($_COOKIE['email']);
        setcookie("email", "",time() -3600,"/");
        unset($_COOKIE['candidato']);
        setcookie("candidato", "",time() -3600,"/");
        //set dados
        $nome = $dados['nome'];
        $email = $dados['email'];
        $pass = md5($dados['pass']);
        $cpf = $dados['cpf'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $idade = $dados['idade'];
        $faculdade = $dados['faculdade'];
        $telefone = $dados['telefone'];
        $cpf_antigo = $dados['cpf_antigo'];
        $c = new Candidato;
        $query = $c->alterar($cpf_antigo,$email, $pass, $cpf, $cidade, $estado, $idade, $faculdade, $telefone, $nome);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        //cria novos cookies com os dados atualizados
        setcookie("email", $email,time() + 3600,'/');
        setcookie("candidato", $email,time() + 3600,'/');
        //redireciona para perfil.php
        header("Location:../Site/candidato/perfil.php");
        }
       
    public function delete($email){
        $sql ="DELETE FROM CANDIDATOS WHERE EMAIL = '$email'";
        return $sql; 
    }
     
    public function getData($query)
    {        
        $connection = new MySQL;
        $result = $connection->executeQuery($query);
      
        if ($result == false) {
            return false;
        } 
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        $connection->disconnect();
        return $rows;
    }
}   

    //verifica se houve algum request POST, ou seja, uma confirmação de formulario mandando para essa pagina
    // como no caso tanto a pagina alterar quanto a pagina criar enviam um comando post, se faz a verificação atraves
    // de um input hidden informando se é pra alterar ou cadastrar
    if(isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um *request* POST
        // variavel method = o input hidden do form
     $method = $_POST['method'];
     if( $method == "cadastrar" ){
        $empresa = new Candidato;
        // envia um vetor $_POST, com todas informações do post
        $empresa->createCandidato($_POST);
     }
     if ($method == "alterar" ){
        $empresa = new Candidato;
        $empresa->alterCandidato($_POST); 
     }
     else{
     }
    }


 