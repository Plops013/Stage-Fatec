<?php

class Vaga{
    
var $nome;
var $desc;
var $cidade;
var $estado;
var $qtdvaga;
    
    public function insert($qtd_vagas,$nome,$desc,$estado,$cidade,$cnpj)
    {
        $sql ="INSERT INTO VAGAS (QTD_VAGA , NOME, DESCRICAO, VAGA_ESTADO, VAGA_CIDADE, CNPJ_EMPRESA) VALUES"
                . " ('$qtd_vagas', '$nome', '$desc', '$estado', '$cidade', '$cnpj')";
        return $sql;
    }

        public function alterar($qtd_vagas,$nome,$desc,$estado,$cidade,$cnpj,$id)
    {
            $sql ="UPDATE VAGAS"
                . " SET QTD_VAGAS = '$qtd_vagas', NOME = '$nome', DESCRICAO = '$desc', VAGA_ESTADO = '$estado', VAGA_CIDADE = '$cidade', CNPJ_EMPRESA = '$cnpj'"
                . " WHERE ID = '$id'";
        return $sql;
    }
    /*
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
        $c = new Candidato;
        $query = $c->insert($email, $pass, $cpf, $cidade, $estado, $idade, $faculdade, $telefone, $nome);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        session_start();
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
        header("Location:../Site/perfil.php");
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
    if(isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um *request* POST
     $method = $_POST['method'];
     if( $method == "cadastrar" ){
        $candidato = new Candidato;
        $candidato->createCandidato($_POST);
     }
     elseif ($method == "alterar" ){
        $candidato = new Candidato;
        $candidato->alterCandidato($_POST); 
     }
     else{
     }
    }*/
}