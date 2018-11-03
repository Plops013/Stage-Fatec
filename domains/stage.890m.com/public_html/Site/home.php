<!DOCTYPE html>
<html>
    <?php
    include_once '../back_end/Vaga.php';
    include_once '../back_end/Empresa.php';

    $v = new Vaga();
    $result = $v->getVagas();
    ?>

    <?php
    if (isset($_COOKIE['email']) || isset($_COOKIE['empresa'])) {
        header("Location:empresa/home2.php");
    }
    if (isset($_COOKIE['email']) || isset($_COOKIE['candidato'])) {
        header("Location:candidato/home2.php");
    }
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css">
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
                    <a  href="login_candidatos.php">
                        <button type="button" class="btn btn-primary">
                            <i class="fa d-inline fa-lg fa-user-circle-o"></i> Sign in</button>
                    </a>
                </div>
            </div>
        </nav>
        <div class="py-5 text-center" style="background-image: url('img/bg1.jpg');background-position:center center;background-size:cover;background-repeat:no-repeat;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 bg-primary m-1 p-2">
                        <h1 class="display-3 bg-primary">Bem vindo ao sucesso!!</h1>
                        <p class="lead mb-5">Venha conheçer nossas oportunidades e saia com uma carreira
                            <br>Processos seletivos dinamicos e praticos para aproximar voce e as empresas mais facilmente</p>
                        <a href="login_candidatos.php" class="btn btn-lg btn-success m-0 w-25">Inscrever-se</a>
                    </div></div>

                <?php if ($result == null) { ?>
                <?php } else { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 bg-primary m-1 p-2">
                                <br/>
                                <h1 class="display-5"> Confira algumas vagas disponiveis em nosso site</h1>
                                <br/>
                                <div class="card-columns">
                                    <?php
                                    foreach ($result as $key => $res) {
                                        ?>
                                        <div class="card text-white bg-dark">
                                            <div class="card-body">
                                                <h3 class="card-title text-uppercase text-secondary"><?php
                                                    $empresa = new Empresa();
                                                    $e = $empresa->getVagaEmpresa($res['CNPJ_EMPRESA']);
                                                    echo $e->nome_fantasia;
                                                    ?></h3>
                                                <h5 class="text-uppercase font-weight-bold text-info "><?php echo $res['NOME'] ?> - <?php echo $res['VAGA_ESTADO'] ?></h5>
                                                <p class="card-text font-weight-light text-white-50"><?php echo $substr = substr($res['DESCRICAO'], 0, 35); ?>...</p>
                                                <p class="card-text font-weight-light"><small class="text-white-50 font-weight-light">Quantidade de vagas: <span class=" font-weight-bold text-secondary"><?php echo $res['QTD_VAGA'] ?></span></small></p>
                                            </div> 
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 bg-dark text-white bg-gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="lead">Faça registro para receber nossas ultimas notícias</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="email@mail.com"></div>
                                <button type="submit" class="btn btn btn-secondary ml-3">Inscreva-se</button>
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