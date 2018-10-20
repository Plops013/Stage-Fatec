<?php
        
        include_once 'Candidato.php';
        include_once 'Connect.php';
        
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
        
        $c = new Candidato;
        $query = $c->insert($email, $pass, $cpf, $cidade, $estado, $idade, $faculdade, $telefone, $nome);
        $conn = new MySQL;
        $conn->executeQuery($query);
        $conn->disconnect();
        header("Location:../Site/loguin_msg.php");
        setcookie('cadastrou','1')
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