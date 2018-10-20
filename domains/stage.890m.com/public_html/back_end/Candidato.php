<?php
        
        
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
        $sql ="INSERT INTO CANDIDATOS (EMAIL, SENHA, IDADE, CPF, CANDIDATO_CIDADE, CANDIDATO_ESTADO, FACULDADE, TELEFONE, NOME) VALUES ('$email', '$pass', '$idade', '$cpf', '$cidade', '$estado', '$faculdade', '$telefone','$nome')";
        return $sql;
    }
    
        public function alterar($cpf_antigo,$email,$pass,$cpf,$cidade,$estado,$idade,$faculdade,$telefone,$nome)
    {
            $sql ="UPDATE CANDIDATOS"
                . " SET EMAIL = '$email', SENHA = '$pass', IDADE = '$idade', CPF = '$cpf', CANDIDATO_CIDADE = '$cidade', CANDIDATO_ESTADO = '$estado', FACULDADE = '$faculdade', TELEFONE = '$telefone', NOME = '$nome'"
                . " WHERE CPF = $cpf_antigo";
        return $sql;
    }
    public function delete($email){
        $sql ="DELETE FROM CANDIDATOS WHERE EMAIL = '$email'";
        return $sql; 
    }
    
    public function consulta($cpf){
        $sql ="SELECT * FROM CANDIDATOS WHERE CPF = '$cpf'";
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