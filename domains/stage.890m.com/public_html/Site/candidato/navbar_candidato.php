<?php 
                            if(!isset($_COOKIE['email']) || !isset($_COOKIE['candidato'])){
                                header("Location:../home.php");
                            }?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../theme.css" type="text/css"> </head>

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
            <a class="nav-link" href="perfil.php">Bem Vindo:&nbsp;
              <i class="fa d-inline fa-lg fa-user-circle-o"></i> 
                                                                    <?php 
                                                                    echo $_COOKIE['nome'];
                                                                    ?></a>
          </li>
        </ul>
        <a href="../../back_end/disconnect_user.php">
          <button type="button" class="btn btn-primary"> &nbsp;Logoff</button>
        </a>
      </div>
    </div>
  </nav>