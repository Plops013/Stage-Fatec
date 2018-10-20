<?php
        
        include_once 'Candidato.php';
        include_once 'Connect.php';
                
        unset($_COOKIE['email']);
        setcookie("email", "",time() -3600,"/");

        unset($_COOKIE['candidato']);
        setcookie("candidato", "",time() -3600,"/");
        
        echo "coco";
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cpf = $_POST['cpf'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $idade = $_POST['idade'];
        $faculdade = $_POST['faculdade'];
        $telefone = $_POST['telefone'];
        $cpf_antigo = $_POST['cpf_antigo'];
        
        $c = new Candidato;
        $query = $c->alterar($cpf_antigo,$email, $pass, $cpf, $cidade, $estado, $idade, $faculdade, $telefone, $nome);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
                  setcookie("email", $email,time() + 3600,'/');
                  setcookie("candidato", $email,time() + 3600,'/');
        header("Location:../Site/perfil.php");
        /*
        $del = $c->delete('12345');
        $conn->executeQuery($del);
        $conn->disconnect();
        
        $query2 = "SELECT * FROM users ORDER BY id DESC";
        $result = $c->getData($query2);
        
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['NOME']."</td>";
        echo "<td>".$res['IDADE']."</td>";
        echo "<td>".$res['EMAIL']."</td>";    
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
*/
 
?>