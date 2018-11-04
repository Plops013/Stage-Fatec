<?php

        include_once 'Candidato.php';
        include_once 'Empresa.php';
        include_once 'Connect.php';
        
        echo "coco";
        
        if(isset($_COOKIE["candidato"])){
        $c = new Candidato;
        $c->email = $_COOKIE['email'];
        $query = $c->delete($c->email);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        header("Location:/back_end/disconnect_user.php");
        } 
        elseif(isset ($_COOKIE["empresa"])){
        $c = new Empresa;
        $c->email = $_COOKIE['email'];
        $query = $c->delete($c->email);
        $sql = "DELETE FROM VAGA WHERE CNPJ_EMPRESA = ". $_COOKIE['cnpj']. " ";
        $conn = new MySQL;
        $conn->executeQuery($sql);
        $conn->executeQuery($query);
        $conn->disconnect();
        header("Location:/back_end/disconnect_user.php");};