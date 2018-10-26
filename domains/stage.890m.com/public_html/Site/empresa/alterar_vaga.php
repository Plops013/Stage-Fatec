<?php include_once 'navbar_empresa.php'; ?>
<?php
include_once '../../back_end/Vaga.php';
include_once '../../back_end/Empresa.php';
$id_vaga = $_COOKIE['vaga_id'];
$vaga = new Vaga();
$v = $vaga->getVaga($id_vaga);
?>

<?php $cnpj = $_COOKIE['cnpj']; ?>
<div class="py-5" style="background-repeat:no-repeat;background-size:cover;background-image: url('img/bg3.jpg');;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light">
                <br>
                <h1 class="display-4 mx-auto text-center">Alterar Vaga</h1>
                <form method="POST" action="../../back_end/Vaga.php">
                    <input type="hidden" name="method" value="alterar">
                    <input type="hidden" name="cnpj" value="<?php echo $cnpj?>">
                    <input type="hidden" name="id" value="<?php echo $id_vaga?>">
                    <div class="form-group" >
                        <small class="form-text text-muted">
                            <b>Titulo da Vaga:</b>
                        </small>
                        <input type="text" class="form-control" placeholder="" name="nome" id="nome" value=" <?php echo $v->nome ?> " required> </div>
                    <div class="form-group" >
                        <small class="form-text text-muted">
                            <b>Descrição da vaga:</b>
                        </small>
                        <textarea rows="10" class="form-control" placeholder="" name="desc" id="desc" required><?php echo $v->desc ?></textarea> </div>
                    <div class="form-group">
                        <small class="form-text text-muted">
                            <b>Quantidade de vagas:</b>
                        </small>
                        <input type="text" class="form-control" placeholder="" name="qtdvagas" id="qtdvagas" value="<?php echo $v->qtd_vagas ?>" required> </div>
                    <div class="form-group">
                        <small class="form-text text-muted">
                            <b>Estado em que se situa a vaga:</b>
                        </small>
                    <select class="form-control" id="estado" name="estado">
                    <option <?php if($v->estado == 'AC'){ ?> selected <?php } ?>>AC</option>
                    <option <?php if($v->estado == 'AL'){ ?> selected <?php } ?>>AL</option>
                    <option <?php if($v->estado == 'AP'){ ?> selected <?php } ?>>AP</option>
                    <option <?php if($v->estado == 'AM'){ ?> selected <?php } ?>>AM</option>
                    <option <?php if($v->estado == 'BA'){ ?> selected <?php } ?>>BA</option>
                    <option <?php if($v->estado == 'CE'){ ?> selected <?php } ?>>CE</option>
                    <option <?php if($v->estado == 'DF'){ ?> selected <?php } ?>>DF</option>
                    <option <?php if($v->estado == 'ES'){ ?> selected <?php } ?>>ES</option>
                    <option <?php if($v->estado == 'GO'){ ?> selected <?php } ?>>GO</option>
                    <option <?php if($v->estado == 'MA'){ ?> selected <?php } ?>>MA</option>
                    <option <?php if($v->estado == 'MT'){ ?> selected <?php } ?>>MT</option>
                    <option <?php if($v->estado == 'MS'){ ?> selected <?php } ?>>MS</option>
                    <option <?php if($v->estado == 'MG'){ ?> selected <?php } ?>>MG</option>
                    <option <?php if($v->estado == 'PA'){ ?> selected <?php } ?>>PA</option>
                    <option <?php if($v->estado == 'PB'){ ?> selected <?php } ?>>PB</option>
                    <option <?php if($v->estado == 'PR'){ ?> selected <?php } ?>>PR</option>
                    <option <?php if($v->estado == 'PE'){ ?> selected <?php } ?>>PE</option>
                    <option <?php if($v->estado == 'PI'){ ?> selected <?php } ?>>PI</option>
                    <option <?php if($v->estado == 'RJ'){ ?> selected <?php } ?>>RJ</option>
                    <option <?php if($v->estado == 'RN'){ ?> selected <?php } ?>>RN</option>
                    <option <?php if($v->estado == 'RS'){ ?> selected <?php } ?>>RS</option>
                    <option <?php if($v->estado == 'RO'){ ?> selected <?php } ?>>RO</option>
                    <option <?php if($v->estado == 'RR'){ ?> selected <?php } ?>>RR</option>
                    <option <?php if($v->estado == 'SC'){ ?> selected <?php } ?>>SC</option>
                    <option <?php if($v->estado == 'SP'){ ?> selected <?php } ?>>SP</option>
                    <option <?php if($v->estado == 'SE'){ ?> selected <?php } ?>>SE</option>
                    </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted">
                            <b>Cidade em que se situa a vaga:</b>
                        </small>
                        <input type="text" class="form-control" placeholder="" name="cidade" id="idade" value="<?php echo $v->cidade ?>" required> </div>
                    <div class="form-group">
                        <small class="form-text text-muted">
                            <b>Requisitos (Conhcimentos desejados):</b>
                        </small>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Java</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">PHP</label>
                        </div>   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3">
                            <label class="form-check-label" for="inlineCheckbox2">C#</label>
                        </div>       
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
                            <label class="form-check-label" for="inlineCheckbox2">.NET</label>
                        </div>       
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option5">
                            <label class="form-check-label" for="inlineCheckbox2">HTML</label>
                        </div>       
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="gerenciar_vagas.php"><button type="button" class="btn btn-primary">Cancelar</button></a>
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