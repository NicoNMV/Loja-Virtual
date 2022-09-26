<!DOCTYPE html>
<html lang="pt-br">

<head>

  <title> Cadastro - Usuário</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <style>
    .navbar {
      margin-bottom: 0;
    }
  </style>

  <script>
    $(document).ready(() => {
      $("#cep").mask("00000-000");
    });
  </script>
</head>

<body>
  <?php

  include 'conexao.php';
  include 'tools/navbar.php';

  ?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <h2>Cadastro de novo cliente</h2>

        <form method="post" action="inserirUsuario.php" name="logon">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input name="txtnome" type="text" class="form-control" required id="nome">
          </div>

          <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input name="txtsobrenome" type="text" class="form-control" required id="sobrenome">
          </div>

          <div class="form-group">
            <label for="email">E-mail</label>
            <input name="txtemail" type="email" class="form-control" required id="email">
          </div>

          <div class="form-group">
            <label for="senha">Senha</label>
            <input name="txtsenha" type="password" class="form-control" required id="senha">
          </div>

          <div class="form-group">
            <label for="endereco">Endereço</label>
            <textarea name="txtendereco" rows="5" class="form-control" required id="endereco"></textarea>
          </div>

          <div class="form-group">

            <label for="cidade">Cidade</label>
            <input name="txtcidade" type="text" class="form-control" required id="cidade">
          </div>

          <div class="form-group">

            <label for="cep">CEP</label>
            <input name="txtcep" type="text" class="form-control" required id="cep">
          </div>

          <button type="submit" class="btn btn-lg btn-default">
            <span class="glyphicon glyphicon-pencil"> Cadastrar</span>
          </button>
        </form>
      </div>
    </div>
  </div>

  <?php include 'tools/footer.html' ?>

</body>
</html>