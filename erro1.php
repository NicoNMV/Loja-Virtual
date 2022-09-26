<!DOCTYPE html>
<html lang="pt-br">

<head>

  <title>Minha Loja - Logon de Usuário</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<style>
  .espaco {
    padding-top: 150px;
  }
</style>
</head>

<body>

  <?php

  include 'conexao.php';
  include 'tools/navbar.php';

  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 text-center">

        <h2>Email já em uso na Loja!!!</h2>

        <a href="frmusuario.php" class="btn btn-block btn-info" role="button">Tentar Novamente</a>
        <a href="esquecisenha.php" class="btn btn-block btn-primary" role="button">Esqueci a senha</a>

      </div>
    </div>
  </div>

</body>
</html>