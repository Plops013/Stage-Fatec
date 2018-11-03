<!DOCTYPE html>
<html>
                          <?php
                          if(isset($_COOKIE['email']) || isset($_COOKIE['empresa'])){
                          header("Location:empresa/home2.php");
                            }
                          if(isset($_COOKIE['email']) || isset($_COOKIE['candidato'])){
                          header("Location:home2.php");
                            }?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark bg-gradient">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        <i class="fa d-inline fa-lg fa-cloud"></i>
        <b class="text-uppercase">Stage</b>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-image: url('img/bg2.jpg');background-repeat:no-repeat;background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5 bg-primary">
            <div class="card-body">
                 <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="login_candidatos.php" class="nav-link active">
                <i class="fa fa-user-o"></i>&nbsp;Candidatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login_empresas.php">
                <i class="fa fa-building-o"></i>&nbsp;Empresas</a>
              </li></ul></div></div></div></div>
              <h1 class="mb-4 text-center">Login Candidatos</h1>
              <div class="row">
                <div class="col-md-12">
                    <?php
                        session_start();
                        if(isset($_SESSION['pass_erro'])){ ?>
                        <p class='text-danger'>Login ou/e senha incorretos!</p>
                    <?php } ?>
                    <form action="../back_end/login.php" method="POST" class="m-0">
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter email" required> </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="pass" placeholder="Password" required> </div>
                    <button type="submit" class="btn btn-secondary m-2">Logar</button>
                      <a href="registrar_candidatos.html"><button type="button" class="btn btn-secondary m-2">Registrar-se</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
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