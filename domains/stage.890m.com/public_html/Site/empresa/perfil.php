<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../theme.css" type="text/css"> </head>

<body class="">

  <nav class="navbar navbar-expand-md bg-primary navbar-dark bg-gradient">
    <div class="container">
      <a class="navbar-brand" href="home2.php">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b class="text-uppercase">Stage</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Bem Vindo:&nbsp;
              <i class="fa d-inline fa-lg fa-user-circle-o"></i>  <?php 
                                                                    echo $_COOKIE['email'];
                                                                    ?></a>
          </li>
        </ul>
          <a href="../../back_end/disconnect_user.php">
              <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="C:/Users/Lucas Monteiro/Desktop/New Site/loguin.html#"> &nbsp;Logoff</button></a>
      </div>
    </div>
  </nav>
                                    <?php 
                            if(!isset($_COOKIE['email'])){
                                header("Location:../Site/home.php");
                            }
                            
                            
                            $servername = "localhost";
                            $database = "u687165544_stage";
                            $username = "u687165544_fatec";
                            $password = "fatecanos2000";
                            $query = "SELECT NAME FROM CANDIDATOS";
                            
                            $cpf;
                            $cnpj;
                            
                            $conn = mysqli_connect($servername, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            
                            if(isset ($_COOKIE['empresa']) && !isset($_COOKIE['candidato'])){ 
                                $sql = "SELECT * FROM EMPRESA";
                            
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($_COOKIE['email'] == $row["EMAIL"]){ ?>
    
    <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="home2.php" class="nav-link">
                <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="perfil.php">
                <i class="fa fa-address-card-o"></i>&nbsp;Perfil</a>

            </li>
            <li class="nav-item">
              <a href="participacoes.php" class="nav-link">
                  <i class="fa fa-handshake-o"></i>&nbsp;Participações</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
            <div class="row"><hr></div>
              <img src="../img/perfil.jpg" id="foto-perfil"> </div>
              
              <div class="col-md-6">
                        <div class="row"><hr></div>
                        <li class="list-group-item" >Nome Fantasia: <?php print $row['NOME_FANTASIA'];  ?></li>
                        <li class="list-group-item" >Razão Social: <?php print $row['RAZAO_SOCIAL'];  ?></li>
                        <li class="list-group-item">Email: <?php print $row['EMAIL'];  ?></li>
                        <li class="list-group-item">Telefone: <?php print $row['TELEFONE'];  ?></li>
                        <li class="list-group-item">Estado: <?php print $row['ESTADO'];  ?></li>
                        <li class="list-group-item">Cidade: <?php print $row['CIDADE'];  ?></li>
                        <li class="list-group-item">CNPJ: <?php print $row['CNPJ'];  ?></li>
                        <li class="list-group-item">Senha: <?php print "********";  ?></li>
                        <?php
                        }
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                        ?>
                        <br>
                        <div class="row">
                  <div class="col-md-3">
                     <a  href="alterar_empresa.php">
                    <button  type="button" class="btn btn-primary" style="background-color: #00BFFF;border-radius: 4px"  >Alterar Dados</button>
                     </a>
                  </div>
                    <div class="col-md-6">
                    <a  href="delete_msg.php">
                        <button  type="button" class="btn btn-primary" style="background-color: #00BFFF;border-radius: 4px"  >Excluir Dados</button>  </a>     
                      </div>
                     </div>
                </div>
              
                    </div> <div class="row"><hr></div>
            </div> <div class="row"><hr></div>
          </div>
        </div>
      </div>
    
                             <?php } ?>
  <div class="py-5 bg-dark text-white bg-gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">Sign up to our newsletter for the latest news</p>
          <form class="form-inline">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your e-mail here"> </div>
            <button type="submit" class="btn btn-primary ml-3">Subscribe</button>
          </form>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.facebook.com" target="_blank">
            <i class="fa fa-fw fa-facebook fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://twitter.com" target="_blank">
            <i class="fa fa-fw fa-twitter fa-3x text-white"></i>
          </a>
        </div>
        <div class="col-4 col-md-1 align-self-center">
          <a href="https://www.instagram.com" target="_blank">
            <i class="fa fa-fw fa-instagram text-white fa-3x"></i>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 STAGE - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>