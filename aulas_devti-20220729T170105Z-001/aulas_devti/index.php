
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div  class="container-sm">
  <?php
    session_start();

    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include 'menu.php';
    if (isset($_GET['pagina'])&&$_GET['pagina']=='produtos_lista') {
        include ('produtos/listagem.php');
    }
    if (isset($_GET['pagina'])&&$_GET['pagina']=='produtos_cadastro') {
        include ('produtos/cadastro.php');
    }
    if (isset($_GET['pagina'])&&$_GET['pagina']=='deletar') {
        include ('produtos/deletar.php');
    }
    if (isset($_GET['pagina'])&&$_GET['pagina']=='atualizar') {
        include ('produtos/atualizar_p.php');
    }
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>