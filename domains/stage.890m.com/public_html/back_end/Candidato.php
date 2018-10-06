<?php
class Candidato { 
        
    public function insert($email,$pass,$cpf,$cidade,$estado,$idade,$faculdade,$telefone,$concorre)
    {
        $sql = 'INSERT INTO CANDIDATOS (EMAIL, SENHA, IDADE, CPF, CANDIDATO_CIDADE, CANDIDATO_ESTADO, FACULDADE, TELEFONE, CONCORRE) VALUES ('+ $email +', '+ $pass +', '+ $idade +', '+ $cpf +', '+ $cidade +', '+ $estado +', '+ $faculdade +', '+ $telefone +', '+ $concorre +')';
        
        return $sql;
    }
/*
    public function update($registro)
    {
        $sql  = "UPDATE CANDIDATOS SET var = :var, WHERE var = :var";
        try
        {
            $stmt = connectionDB::prepare($sql);
            if($stmt->execute()){
                echo "UPDATE!!";
            }
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();
        }
    }

    public function findAll()
    {
        $sql = "SELECT * FROM table";
        try
        {
            $stmt = connectionDB::prepare($sql);
            if($stmt->execute()){
                return $stmt->fetchAll(PDO::FETCH_CLASS,'table');
            }
            else {
             //   return new Class();
            }
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();
        }
    }

    public function createObject($r)
    {
        try{
         //   $var= new Class($r['var1'], $r['var2']);
            return $var;
        } catch (PDOException $e){
            echo "Err ->" . $e->getMessage();   
        }
    }*/
}
