<?php
include_once 'Connect.php';
include_once 'Candidato.php';
include_once 'Empresa.php';

class Validation {
    
    public function Validar_Candidato(){ 
    $sql = $conect->query("SELECT * FROM tabela_ WHERE dado1='$dado1'");
    if(mysqli_num_rows($sql) > 0){
    echo "Este usuário já registrado";
    exit();
    }
    }
    
    
    
    
}