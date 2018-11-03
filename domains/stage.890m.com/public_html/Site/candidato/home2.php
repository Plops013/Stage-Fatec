<?php
if (!isset($_COOKIE['email'])) {
    header("Location:../Site/home.php");
} else {
    include_once '../../back_end/Vaga.php';
    include_once '../../back_end/Empresa.php';

    $email = $_COOKIE['email'];
    $cnpj = $_COOKIE['cnpj'];
    $v = new Vaga();
    $result = $v->getVagas();
}
?>
<?php include_once 'navbar_candidato.php'; ?>
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-dark">
                    <li class="nav-item">
                        <a href="home2.php" class="nav-link  active">
                            <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">
                            <i class="fa fa-address-card-o"></i>&nbsp;Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="gerenciar_vagas.php" class="nav-link">
                            <i class="fa fa-handshake-o"></i>&nbsp;Participações</a>
                    </li>
                </ul>
                <br/>
            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Pesquisar</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="search">
                </div>
                <div class="col-sm-2">
                    <input class="mx-auto text-center btn btn-primary" type="submit" value="Pesquisar">
                </div>
            </div>
        </form>
        <br/>
        <?php if ($result == null) { ?>
            <h1 class="text-danger">Ops! nenhuma vaga disponível no momento.</h1>
        <?php } ?>
        <div class="card-columns">
            <?php
            foreach ($result as $key => $res) {
                ?>
                <div class="card p-2 text-white bg-dark">
                    <div class="card-body">
                        <h3 class="card-title text-uppercase text-secondary"><?php
                            $empresa = new Empresa();
                            $e = $empresa->getVagaEmpresa($res['CNPJ_EMPRESA']);
                            echo $e->nome_fantasia;
                            ?></h3>
                        <h5 class="text-uppercase font-weight-bold text-info "><?php echo $res['NOME'] ?> - <?php echo $res['VAGA_ESTADO'] ?></h5>
                        <p class="card-text font-weight-light text-white-50"><?php echo $substr = substr ($res['DESCRICAO'] ,  0 , 130 ); ?>...</p>
                        <p class="card-text font-weight-light"><small class="text-white-50 font-weight-light">Quantidade de vagas: <span class=" font-weight-bold text-secondary"><?php echo $res['QTD_VAGA'] ?></span></small></p>
                        <table>
                            <tr>
                                <td>
                                    <form method="POST" action="../../back_end/Vaga.php">
                                        <input type="hidden" name="id_vaga" value="<?php echo $res['ID_VAGA'] ?>">
                                        <input type="hidden" name="method" value="redirect_visualizar_vaga">
                                        <input type="submit" value="Visualizar" class="btn btn-white">
                                    </form>
                                </td>
                                <td>
                                    <form>
                                    <!-- <form method="POST" action="../../back_end/Vaga.php" -->
                                        <input type="hidden" name="id_vaga" value="<?php echo $res['ID_VAGA'] ?>">
                                        <input type="hidden" name="method" value="redirect_visualizar_teste_vaga">
                                        <input type="submit" value="Aplicar" class="btn btn-secondary">
                                    </form>
                                </td>
                        </table>
                    </div> 
                </div>
                <?php
            }
            ?>
        </div>
</div>
</div>
<div class="row">
    <hr>
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