 <?php

  class CONEXAO

  {

          var $usuario = "u687165544_fatec";

          var $senha = "fatecanos2000";

          var $sid = "localhost";

          var $banco = "u687165544_stage";

          var $consulta = "";

  	var $link = "";  	function CONEXAO()

  	{

  		$this->Conecta();

  	}

  	function Conecta()

  	{

  		$this->link = mysqli_connect($this->sid,$this->usuario,$this->senha,$this->banco);

  		if (!$this->link)

  		{

  			die("Problema na Conexão com o Banco de Dados");

  		}

  	}
        
        public function Query ($sql){
            mysqli_query($this->link,$sql);
            }
function Desconecta()

  	{

  		return mysql_close($this->link);

  	}
/*
function Consulta($consulta)

  	{

          	$this->consulta = $consulta;

  		if ($resultado = mysql_query($this->consulta,$this->link))

  		{

  			return $resultado;

} else {

  			return 0;

  		}

  	}
*/
  }

  ?>