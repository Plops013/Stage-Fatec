<?php include_once 'navbar_empresa.php'; ?>
<?php
include_once '../../back_end/Vaga.php';
include_once '../../back_end/Empresa.php';

$id_vaga = $_COOKIE['vaga_id'];
$vaga = new Vaga();
$v = $vaga->getVaga($id_vaga);
?>
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
                        <a class="nav-link" href="perfil.php">
                            <i class="fa fa-address-card-o"></i>&nbsp;Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="gerenciar_vagas.php" class="nav-link active">
                            <i class="fa fa-handshake-o"></i>&nbsp;Minhas Vagas</a>
                    </li>
                </ul>
                <div class="row">
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> 
                                <h1><?php
                                $empresa = new Empresa();
                                $e = $empresa->getVagaEmpresa($v->cnpj_empresa);
                                echo $e->nome_fantasia;
                                ?></h1> </div>
                            <div class="card-body">
                                <h4><?php echo $v->nome ?></h4>
                                <hr>
                                <p><span class="text-muted">Descrição:</span><?php echo $v->desc ?></p>
                                <p><span class="text-muted">Localização:</span> <?php echo $v->cidade ?> - <?php echo $v->estado ?></p>
                                <p><?php echo $v->nome ?></p>
                                <hr>
                                <h6 class="text-muted"><span class="text-muted">Vagas Disponiveis:</span> <?php echo $v->qtd_vagas ?>  </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <hr>
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
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>