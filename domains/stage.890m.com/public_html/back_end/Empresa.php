<?php
        
        
    class Empresa { 
        var $nome_fantasia;
        var $razao_social;
        var $pass;
        var $cnpj;
        var $cidade;
        var $estado;
        var $email;
        var $telefone;
    
    public function insert($email,$pass,$cnpj,$cidade,$estado,$razao_social,$telefone,$nome_fantasia)
    {
        $sql ="INSERT INTO EMPRESA (EMAIL, SENHA, RAZAO_SOCIAL, NOME_FANTASIA, CIDADE, ESTADO, TELEFONE, CNPJ) "
            . "VALUES ('$email', '$pass', '$razao_social', '$nome_fantasia', '$cidade', '$estado', '$telefone', '$cnpj')";
        return $sql;
    }
    
        public function alterar($cnpj_antigo,$email,$pass,$cnpj,$cidade,$estado,$razao_social,$telefone,$nome_fantasia)
    {
            $sql ="UPDATE EMPRESA"
                . " SET EMAIL = '$email', SENHA = '$pass', RAZAO_SOCIAL = '$razao_social', CNPJ = '$cnpj', CIDADE = '$cidade', ESTADO = '$estado', TELEFONE = '$telefone', NOME_FANTASIA = '$nome_fantasia'"
                . " WHERE CNPJ = $cnpj_antigo";
        return $sql;
    }
    public function delete($email){
        $sql ="DELETE FROM EMPRESA WHERE EMAIL = '$email'";
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