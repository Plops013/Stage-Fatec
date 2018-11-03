<?php  
    include_once '../../back_end/Candidato.php';
    $email = $_COOKIE['email'];
    $candidato = new Candidato();
    $c = $candidato -> getCandidato($email);
    ?>
<?php include_once 'navbar_candidato.php'; ?>
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
                        <li class="list-group-item" >
                            Nome: <?php print $c->nome;  ?></li>
                        <li class="list-group-item" >Idade: <?php print $c->idade;  ?></li>
                        <li class="list-group-item" >CPF: <?php print $c->cpf;  ?></li>
                        <li class="list-group-item">Email: <?php print $c->email;  ?></li>
                        <li class="list-group-item">Tel: <?php print $c->telefone;  ?></li>
                        <li class="list-group-item">Estado: <?php print $c->estado;  ?></li>
                        <li class="list-group-item">Cidade: <?php print $c->cidade;  ?></li>
                        <li class="list-group-item">Escolaridade: <?php print $c->faculdade;  ?></li>
                        <li class="list-group-item">Senha: <?php print "********";  ?></li>
                        <br>
                        <div class="row">
                  <div class="col-md-3">
                     <a  href="alterar_candidatos.php">
                    <button  type="button" class="btn btn-primary" >Alterar Dados</button>
                     </a>
                  </div>
                    <div class="col-md-6">
                    <a  href="delete_msg.php">
                        <button  type="button" class="btn btn-danger" >Excluir Dados</button>  </a>     
                      </div>
                     </div>
                </div>
              
                    </div> <div class="row"><hr></div>
            </div> <div class="row"><hr></div>
          </div>
        </div>
      </div>
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