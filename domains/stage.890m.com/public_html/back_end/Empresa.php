<?php

include_once 'Connect.php';

class Empresa {

    var $nome_fantasia;
    var $razao_social;
    var $pass;
    var $cnpj;
    var $cidade;
    var $estado;
    var $email;
    var $telefone;

    public function insert($email, $pass, $cnpj, $cidade, $estado, $razao_social, $telefone, $nome_fantasia) {
        $sql = "INSERT INTO EMPRESA (EMAIL, SENHA, RAZAO_SOCIAL, NOME_FANTASIA, CIDADE, ESTADO, TELEFONE, CNPJ) "
                . "VALUES ('$email', '$pass', '$razao_social', '$nome_fantasia', '$cidade', '$estado', '$telefone', '$cnpj')";
        return $sql;
    }

    public function alterar($cnpj_antigo, $email, $pass, $cnpj, $cidade, $estado, $razao_social, $telefone, $nome_fantasia) {
        $sql = "UPDATE EMPRESA"
                . " SET EMAIL = '$email', SENHA = '$pass', RAZAO_SOCIAL = '$razao_social', CNPJ = '$cnpj', CIDADE = '$cidade', ESTADO = '$estado', TELEFONE = '$telefone', NOME_FANTASIA = '$nome_fantasia'"
                . " WHERE CNPJ = $cnpj_antigo";
        return $sql;
    }

    public function getEmpresa($email) {
        $con = new MySQL;
        $conn = mysqli_connect($con->host, $con->user, $con->password, $con->database);
        $empresa = new Empresa();

        $sql = "SELECT * FROM EMPRESA";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($email == $row["EMAIL"]) {
                    $empresa->email = $email;
                    $empresa->nome_fantasia = $row['NOME_FANTASIA'];
                    $empresa->razao_social = $row['RAZAO_SOCIAL'];
                    $empresa->cidade = $row['CIDADE'];
                    $empresa->estado = $row['ESTADO'];
                    $empresa->telefone = $row['TELEFONE'];
                    $empresa->cnpj = $row['CNPJ'];
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        return $empresa;
    }

    public function createEmpresa($dados) {

        $nome_fantasia = $dados['nome_fantasia'];
        $email = $dados['email'];
        $pass = md5($dados['pass']);
        $cnpj = $dados['cnpj'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $razao_social = $dados['razao_social'];
        $telefone = $dados['telefone'];

        $e = new Empresa();
        $query = $e->insert($email, $pass, $cnpj, $cidade, $estado, $razao_social, $telefone, $nome_fantasia);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        session_start();
        $_SESSION["username"] = $nome_fantasia;
        header("Location:../Site/loguin_msg.php");
        setcookie('cadastrou', '1');
    }

    public function alterEmpresa($dados) {
        
        unset($_COOKIE['email']);
        setcookie("email", "", time() - 3600, "/");

        unset($_COOKIE['empresa']);
        setcookie("empresa", "", time() - 3600, "/");

        $nome_fantasia = $dados['nome_fantasia'];
        $email = $dados['email'];
        $pass = md5($dados['pass']);
        $cnpj = $dados['cnpj'];
        $cidade = $dados['cidade'];
        $estado = $dados['estado'];
        $razao_social = $dados['razao_social'];
        $telefone = $dados['telefone'];
        $cnpj_antigo = $dados['cnpj_antigo'];

        $c = new Empresa;
        $query = $c->alterar($cnpj_antigo, $email, $pass, $cnpj, $cidade, $estado, $razao_social, $telefone, $nome_fantasia);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();

        setcookie("email", $email, time() + 3600, '/');
        setcookie("empresa", $email, time() + 3600, '/');

        header("Location:../Site/empresa/perfil.php");
    }

    public function delete($email) {
        $sql = "DELETE FROM EMPRESA WHERE EMAIL = '$email'";
        return $sql;
    }

    public function consulta($cpf) {
        $sql = "SELECT * FROM CANDIDATOS WHERE CPF = '$cpf'";
    }

}

if (isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um *request* POST
    // variavel method = o input hidden do form
    $method = $_POST['method'];
    if ($method == "cadastrar") {
        $empresa = new Empresa();
        // envia um vetor $_POST, com todas informações do post
        $empresa->createEmpresa($_POST);
    } elseif ($method == "alterar") {
        $empresa = new Empresa();
        $empresa->alterEmpresa($_POST);
    } else {
        
    }
}