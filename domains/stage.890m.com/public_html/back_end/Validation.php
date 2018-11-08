<?php

include_once 'Connect.php';

class Validation {
    
    public function Validar_Candidato($dados){
        $c = new Connect();
        $cpf = $dados['cpf'];
        $email = $dados['email'];
        $conn = mysqli_connect($c->host,$c->user,$c->password,$c->database);
        
        $verifica = mysqli_query($conn, "SELECT * FROM CANDIDATOS WHERE CPF = '$cpf'");
        $verifica2 = mysqli_query($conn, "SELECT * FROM CANDIDATOS WHERE EMAIL ='$email'");
        echo "JA REGISTRADO";
        if (mysqli_num_rows($verifica) > 0) {
            $return = "cpf já registrado";
            echo "CPF JA REGISTRADO";
            return $return;
        }
        elseif (mysqli_num_rows($verifica2) > 0) {
            $return = "email já cadastrado";
            echo "email JA REGISTRADO";
            return $return;
        } /*else {
            $candidato = new Candidato;
            $candidato->createCandidato($dados);
        }*/
        
    }

}

if(isset($_POST['method'])) {
     $method = $_POST['method'];
     if( $method == "cadastrar" ){
        $validar = new Validation();
        $validar->Validar_Candidato($_POST);
    }
}