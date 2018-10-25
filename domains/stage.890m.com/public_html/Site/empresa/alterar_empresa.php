<!DOCTYPE html>
<?php  
    if(!isset($_COOKIE['email'])){
    header("Location:../Site/home.php");
    }
    
    else{
    include_once '../../back_end/Empresa.php';
    $email = $_COOKIE['email'];
    $empresa = new Empresa();
    $c = $empresa->getEmpresa($email);
    }
    ?>

  <?php include_once 'navbar_empresa.php'; ?>
  <div class="py-5" style="background-repeat:no-repeat;background-size:cover;background-image: url('img/bg3.jpg');;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 bg-light">
            <form method="POST" action="../../back_end/Empresa.php">
                <input type="hidden" name="method" value="alterar">
            <div class="form-group" >
              <small class="form-text text-muted">
                <b>Nome Fantasia:</b>
              </small>
              <input type="text" class="form-control" placeholder="" value="<?php print $c->nome_fantasia ;  ?>" name="nome_fantasia" id="nome" required> </div>
              <div class="form-group">
              <small class="form-text text-muted">
                <b>Razão Social:</b>
              </small>
              <input type="text" class="form-control" value="<?php print $c->razao_social ;  ?>" placeholder="FATEC PG" name="razao_social" id="faculdade"> </div>
              <div class="form-group" >
              <small class="form-text text-muted">
                <b>Senha:</b>
              </small>
              <input type="password" class="form-control" placeholder="********" name="pass" id="pass" required> </div>
            <div class="form-group">
              <small class="form-text text-muted">
                <b>CNPJ:</b>
              </small>
              <input type="text" class="form-control" value="<?php print $c->cnpj ;  ?>" placeholder="00011122233" name="cnpj" id="cpf">
              <input type="hidden" class="form-control" value="<?php print $c->cnpj ;  ?>" name="cnpj_antigo" id="cpf">
            </div>
            <div class="form-group">
              <small class="form-text text-muted">
                <b>Email:</b>
              </small>
              <input type="email" class="form-control" value="<?php print $c->email ;?>" placeholder="seuemail@provedor.com" name="email" id="email"> </div>
            <div class="form-group">
              <small class="form-text text-muted">
                <b>Telefone:</b>
              </small>
              <input type="text" class="form-control" value="<?php print $c->telefone ;  ?>" placeholder="13988887777" name="telefone" id="telefone"> </div>
            <div class="form-group">
              <small class="form-text text-muted">
                <b>Cidade</b>
              </small>
              <input type="text" class="form-control" value="<?php print $c->cidade ;  ?>" placeholder="Sua cidade" name="cidade" id="cidade"> </div>
  <div class="form-group">
              <small class="form-text text-muted">
                <b>Estado em que se situa a vaga:</b>
              </small>
                    <select class="form-control" id="estado" name="estado">
                    <option <?php if($c->estado == 'AC'){ ?> selected <?php } ?>>AC</option>
                    <option <?php if($c->estado == 'AL'){ ?> selected <?php } ?>>AL</option>
                    <option <?php if($c->estado == 'AP'){ ?> selected <?php } ?>>AP</option>
                    <option <?php if($c->estado == 'AM'){ ?> selected <?php } ?>>AM</option>
                    <option <?php if($c->estado == 'BA'){ ?> selected <?php } ?>>BA</option>
                    <option <?php if($c->estado == 'CE'){ ?> selected <?php } ?>>CE</option>
                    <option <?php if($c->estado == 'DF'){ ?> selected <?php } ?>>DF</option>
                    <option <?php if($c->estado == 'ES'){ ?> selected <?php } ?>>ES</option>
                    <option <?php if($c->estado == 'GO'){ ?> selected <?php } ?>>GO</option>
                    <option <?php if($c->estado == 'MA'){ ?> selected <?php } ?>>MA</option>
                    <option <?php if($c->estado == 'MT'){ ?> selected <?php } ?>>MT</option>
                    <option <?php if($c->estado == 'MS'){ ?> selected <?php } ?>>MS</option>
                    <option <?php if($c->estado == 'MG'){ ?> selected <?php } ?>>MG</option>
                    <option <?php if($c->estado == 'PA'){ ?> selected <?php } ?>>PA</option>
                    <option <?php if($c->estado == 'PB'){ ?> selected <?php } ?>>PB</option>
                    <option <?php if($c->estado == 'PR'){ ?> selected <?php } ?>>PR</option>
                    <option <?php if($c->estado == 'PE'){ ?> selected <?php } ?>>PE</option>
                    <option <?php if($c->estado == 'PI'){ ?> selected <?php } ?>>PI</option>
                    <option <?php if($c->estado == 'RJ'){ ?> selected <?php } ?>>RJ</option>
                    <option <?php if($c->estado == 'RN'){ ?> selected <?php } ?>>RN</option>
                    <option <?php if($c->estado == 'RS'){ ?> selected <?php } ?>>RS</option>
                    <option <?php if($c->estado == 'RO'){ ?> selected <?php } ?>>RO</option>
                    <option <?php if($c->estado == 'RR'){ ?> selected <?php } ?>>RR</option>
                    <option <?php if($c->estado == 'SC'){ ?> selected <?php } ?>>SC</option>
                    <option <?php if($c->estado == 'SP'){ ?> selected <?php } ?>>SP</option>
                    <option <?php if($c->estado == 'SE'){ ?> selected <?php } ?>>SE</option>
                    </select>
            </div>
               <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <a href="perfil.php"><button type="button" class="btn btn-primary">Cancelar</button></a>
              <div class="row"><hr></div> 
          </form>
        </div>
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