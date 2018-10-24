<?php include_once 'navbar_empresa.php'; ?>
                                    <?php 
                            if(!isset($_COOKIE['email'])){
                                header("Location:../Site/home.php");
                            }
                            $servername = "localhost";
                            $database = "u687165544_stage";
                            $username = "u687165544_fatec";
                            $password = "fatecanos2000";
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
              <a href="gerenciar_vagas.php" class="nav-link">
                  <i class="fa fa-handshake-o"></i>&nbsp;Minhas Vagas</a>
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