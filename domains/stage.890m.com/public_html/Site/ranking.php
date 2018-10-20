<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css"> </head>

<body>
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
        <a href="home.html">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="C:/Users/Lucas Monteiro/Desktop/New Site/loguin.html#"> &nbsp;Logoff</button>
        </a>
      </div>
    </div>
  </nav>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="home2.html" class="nav-link">
                <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.html">
                <i class="fa fa-address-card-o"></i>&nbsp;Perfil</a>
            </li>
            <li class="nav-item">
              <a href="participacoes.html" class="nav-link active">
                <i class="fa fa-handshake-o"></i>&nbsp;Participações</a>
            </li>
          </ul>
            <div class="row"><hr></div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header"> Empresa x Tecnology Ltda. </div>
                <div class="card-body">
                  <h4>Analista Desenvolvedor Java</h4>
                  <h6 class="text-muted"></h6>
                  <p>Procuramos Profissional que tenha conhecimento em Java.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                  </tr>
                </tbody>
              </table>
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

</body>

</html>