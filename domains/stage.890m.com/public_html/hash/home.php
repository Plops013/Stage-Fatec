<?php
    $i = $_POST['index'] + 1;
    if($_POST['reset'] != null){
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
                if ($dado[$i] != null){
                ?>
                </tr>
        </div>
        <div class="container mx-auto text-center">
            <table class="table table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sem Criptografia</th>
                    <th scope="col">MD5</th>
                    <th scope="col">SHA1</th>
                    <th scope="col">Crypt</th>
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
    </body>
</html>

