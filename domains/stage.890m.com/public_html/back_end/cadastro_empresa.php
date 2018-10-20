<?php
        
        include_once 'Candidato.php';
        include_once 'Connect.php';
        include_once 'Empresa.php';
        
        echo "coco";
        
        $nome_fantasia = $_POST['nome_fantasia'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cnpj = $_POST['cnpj'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $razao_social = $_POST['razao_social'];
        $telefone = $_POST['telefone'];
        
        $c = new Empresa;
        $query = $c->insert($email,$pass,$cnpj,$cidade,$estado,$razao_social,$telefone,$nome_fantasia);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        header("Location:../Site/loguin_msg.php");

?>