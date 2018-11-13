<?php
$i = $_POST['index'] + 1;
if ($_POST['reset'] != null) {
    $i = 0;
    $_POST['texto'] = null;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

    </head>

    <body>
        <br/>
        <div class="mx-auto">
            <div class="container mx-auto text-center">
                <h1 class="display-3">Criptografia HASH em PHP</h1>
                <form method="POST" action="home.php">
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Texto</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="texto" type="text" name="search">
                            <input class="form-control" name="index" type="hidden" value="<?php echo $i ?>" name="search">
                        </div>
                        <div class="col-sm-1">
                            <input class="mx-auto text-center btn btn-success" type="submit" value="Enviar">
                        </div>
                        <div class="col-sm-1">
                            <input class="mx-auto text-center btn btn-danger" name=reset type="submit" value="Resetar">
                        </div>
                    </div>
                    <?php
                    $dado[$i] = $_POST['texto'];
                    if ($dado[$i] != null) {
                        ?>
                        </tr>
                </div>
                <div class="jumbotron bg-dark mx-auto text-center">
                    <p></p>
                    <table class="table table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sem Criptografia</th>
                            <th scope="col">MD5 (32 Digitos)</th>
                            <th scope="col">SHA1 (40 Digitos)</th>
                            <th scope="col">Crypt (34 Digitos)</th>
                        </tr>
                        <tr>
                            <td class="text-center"><?php echo $i ?></td>
                            <td class="text-center"><?php echo $dado[$i] ?></td>
                            <td class="text-center"><?php echo md5($dado[$i]) ?></td>
                            <td class="text-center"><?php echo sha1($dado[$i]) ?></td>
                            <td class="text-center"><?php echo crypt($dado[$i]) ?></td>
                        </tr>
                        </form>
                    </table>
                <?php } ?>
            </div>
            <div class="jumbotron mx-auto text-center bg-dark text-white">
                <h1 class="display-4">Hash</h1>
                <p>
                    Um hash é uma sequência de bits geradas por um algoritmo de dispersão, em geral representada em base hexadecimal, que permite a visualização em letras e números (0 a 9 e A a F). O conceito teórico diz que "hash é a transformação de uma grande quantidade de dados em uma pequena quantidade de informações"
                </p>
                <p>
                    Essa sequência busca identificar um arquivo ou informação unicamente. É um método para transformar dados de tal forma que o resultado seja (quase) exclusivo. Além disso, funções usadas em criptografia garantem que não é possível a partir de um valor de hash retornar à informação original.
                </p>
                <br/>
                <h1 class="display-4">Utilidades</h1>
                <p>
                    Assinatura Digital, Boleto Bancario (Com 1 digito Verificador), Armazenamento de senhas no banco de dados, Armazenamento de cartão no banco de dados
                </p> 
                <br/>
                <h1 class="display-4">Funçoes em Linguagens Diferentes</h1>
                <h2>PHP</h2>
                <p>
                    Crypt(<span class="text-warning">string</span>); <br/>
                    md5(<span class="text-warning">string</span>); <br/>
                    sha1(<span class="text-warning">string</span>); <br/>
                    Fonte : <a href="http://php.net/manual/pt_BR/function.hash.php" target="_blank">Clique aqui</a>
                </p>
                <h2>Java</h2>
                <p>
                    final MessageDigest md = MessageDigest.getInstance("MD5"); <br/>
                    final byte[] hash = md.digest(toBeHashed.getBytes()); <br/>
                    return hash; <br/>
                    <br/>
                    final MessageDigest md = MessageDigest.getInstance("MD2"); <br/>
                    final MessageDigest md = MessageDigest.getInstance("SHA-1");<br/>
                    final MessageDigest md = MessageDigest.getInstance("SHA-256");<br/>
                    final MessageDigest md = MessageDigest.getInstance("SHA-512");<br/>
                    Fonte : <a href="http://www.ricardogiaviti.com.br/2016/10/gerando-hash-com-java/" target="_blank">Clique aqui</a>
                </p>
                <br/>
                <h2>C</h2>
                <p>hash(<span class="text-warning">dado</span>);</p>
                Fonte : <a href="https://www.vivaolinux.com.br/script/Funcao-de-hash-simples-em-C" target="_blank">Clique aqui</a>
                <br/>
                <br/>
                <h1><a href="https://github.com/Plops013/Stage-Fatec/blob/STAGES/domains/stage.890m.com/public_html/hash/home.php" target="_blank">Codigo Fonte</a></h1>
            </div>
        </div>
    </body>
</html>

