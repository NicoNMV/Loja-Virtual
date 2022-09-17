<!DOCTYPE html>
<html lang="pt-br">

<head>

  <title>Livraria Online</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
  <?php
  include 'tools/navbar.html';
  include 'tools/jumbotron.html';
  include 'conexao.php';
  $consulta = $cn->query('select nm_livro, ds_capa, vl_preco, qt_estoque from vw_livro');
  ?>


  <div class="container-fluid">
    <div class="row">
      <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-sm-3">
          <img src="img/<?php echo $exibe['ds_capa']; ?>.jpg" class="img-responsive" style="width: 100%">
          <div>
            <h4><b><?php echo mb_strimwidth($exibe['nm_livro'], 0, 30, '...'); ?></b></h5>
            <h5>R$ <?php echo number_format($exibe['vl_preco'], 2, ',', '.'); ?></h6>

            <div class="text-center">
              <button class="btn btn-lg btn-block btn-default">
                <span class="glyphicon glyphicon-info-sign" style="color:cadetblue"> Detalhes</span>
              </button>
            </div>  

            <div class="text-center" style="margin-top:5px; margin-bottom:5px;">
              <?php if($exibe['qt_estoque'] > 0) { ?>

              <button class="btn btn-lg btn-block btn-info">
                <span class="glyphicon glyphicon-usd"> Comprar</span>
              </button>      
              
              <?php } else { ?>

              <button class="btn btn-lg btn-block btn-danger" disabled>
                <span class="glyphicon glyphicon-remove-circle"> Indisponível</span>
              </button>   

              <?php } ?>
              
              <?php
              ?>
              <button class="btn <?php echo $btn_type ?> btn-block" type="submit" <?php echo $enabled?>>
                <span class="<?php echo $estoque_icon ?>"> <?php echo $btn_msg ?></span>
              </button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include 'tools/footer.html' ?>
</body>

</html>
