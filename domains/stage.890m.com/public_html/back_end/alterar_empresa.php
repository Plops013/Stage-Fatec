<?php
        
        include_once 'Empresa.php';
        include_once 'Connect.php';
        
        unset($_COOKIE['email']);
        setcookie("email", "",time() -3600,"/");

        unset($_COOKIE['empresa']);
        setcookie("empresa", "",time() -3600,"/");
        
        echo "coco";
        
        $nome_fantasia = $_POST['nome_fantasia'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $cnpj = $_POST['cnpj'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $razao_social = $_POST['razao_social'];
        $telefone = $_POST['telefone'];
        $cnpj_antigo = $_POST['cnpj_antigo'];
        
        $c = new Empresa;
        $query = $c->alterar($cnpj_antigo,$email,$pass,$cnpj,$cidade,$estado,$razao_social,$telefone,$nome_fantasia);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        
          setcookie("email", $email,time() + 3600,'/');
          setcookie("empresa", $email,time() + 3600,'/');
          
        header("Location:../Site/empresa/perfil.php");
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