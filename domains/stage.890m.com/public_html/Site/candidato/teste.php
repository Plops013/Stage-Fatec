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

<div>
    <h1> Pergunta </h1>
    <form>
        <input type="radio" value="1">
        <input type="radio" value="2">
        <input type="radio" value="3">
        <input type="radio" value="4">
        <input type="radio" value="5">
    </form>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>