<?php

include_once 'Connect.php';

class Vaga {

    var $id_vaga;
    var $nome;
    var $desc;
    var $cidade;
    var $estado;
    var $qtd_vagas;
    var $cnpj_empresa;

    public function insert($qtd_vagas, $nome, $desc, $estado, $cidade, $cnpj) {
        $sql = "INSERT INTO VAGA (QTD_VAGA , NOME, DESCRICAO, VAGA_ESTADO, VAGA_CIDADE, CNPJ_EMPRESA) VALUES"
                . " ('$qtd_vagas', '$nome', '$desc', '$estado', '$cidade', $cnpj)";
        return $sql;
    }

    public function delete($id) {
        $sql = "DELETE FROM VAGA WHERE ID_VAGA = $id";
        return $sql;
    }

    public function alterar($qtd_vagas, $nome, $desc, $estado, $cidade, $cnpj, $id) {
        $sql = "UPDATE VAGA"
                . " SET QTD_VAGA = '$qtd_vagas', NOME = '$nome', DESCRICAO = '$desc', VAGA_ESTADO = '$estado', VAGA_CIDADE = '$cidade', CNPJ_EMPRESA = '$cnpj'"
                . " WHERE ID_VAGA = '$id'";
        return $sql;
    }

    public function createVaga($dados) {
        $nome = $dados['nome'];
        $desc = $dados['desc'];
        $qtd_vagas = $dados['qtdvagas'];
        $estado = $dados['estado'];
        $cidade = $dados['cidade'];
        $cnpj = $dados['cnpj'];

        $c = new Vaga;
        $query = $c->insert($qtd_vagas, $nome, $desc, $estado, $cidade, $cnpj);

        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        header("Location:../Site/empresa/gerenciar_vagas.php");
        setcookie('cadastrou_vaga', '1');
    }

    public function alterVaga($dados) {
        setcookie("vaga_id", $_POST['id_vaga'], time() - 3600, '/');
        $nome = $dados['nome'];
        $desc = $dados['desc'];
        $qtd_vagas = $dados['qtdvagas'];
        $estado = $dados['estado'];
        $cidade = $dados['cidade'];
        $cnpj = $dados['cnpj'];
        $id = $dados['id'];

        $c = new Vaga;
        $query = $c->alterar($qtd_vagas, $nome, $desc, $estado, $cidade, $cnpj, $id);

        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        setcookie("vaga_id", $id, time() + 3600, '/');
        header("Location:../Site/empresa/gerenciar_vagas.php");
    }

    public function getVaga($id) {
        $con = new MySQL;
        $conn = mysqli_connect($con->host, $con->user, $con->password, $con->database);
        $vaga = new Vaga();

        $sql = "SELECT * FROM VAGA";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($id == $row["ID_VAGA"]) {
                    $vaga->nome = $row['NOME'];
                    $vaga->qtd_vagas = $row['QTD_VAGA'];
                    $vaga->desc = $row['DESCRICAO'];
                    $vaga->estado = $row['VAGA_ESTADO'];
                    $vaga->cidade = $row['VAGA_CIDADE'];
                    $vaga->cnpj_empresa = $row['CNPJ_EMPRESA'];
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        return $vaga;
    }

    public function getVagas() {
        $con = new MySQL;
        $conn = mysqli_connect($con->host, $con->user, $con->password, $con->database);
        $vaga = new Vaga();

        $sql = "SELECT * FROM VAGA";
        $result = $conn->query($sql);

        if ($result == false) {
            return false;
        }
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    /*
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
      } */
}

if (isset($_POST['method'])) { // aqui é onde vai decorrer a chamada se houver um *request* POST
    $method = $_POST['method'];
    if ($method == "cadastrar") {
        $vaga = new Vaga;
        $vaga->createVaga($_POST);
    } elseif ($method == "alterar") {
        $empresa = new Vaga();
        $empresa->alterVaga($_POST);
    } elseif ($method == "redirect_visualizar_vaga") {
        setcookie("vaga_id", $_POST['id_vaga'], time() + 3600, '/');
        header("Location:../Site/empresa/desc_vagas.php");
    } elseif ($method == "redirect_alterar_vaga") {
        setcookie("vaga_id", $_POST['id_vaga'], time() + 3600, '/');
        header("Location:../Site/empresa/alterar_vaga.php");
    } elseif ($method == "redirect_apagar_vaga") {
        $vaga = new Vaga();
        $query = $vaga->delete($_POST['id_vaga']);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        setcookie("vaga_id", $_POST['id_vaga'], time() - 3600, '/');
        header("Location:../Site/empresa/gerenciar_vagas.php");
    } else {
        
    }
}
