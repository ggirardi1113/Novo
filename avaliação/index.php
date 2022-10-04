<?php
    session_start();
    $preco = array();
    include_once('lib/conexao.php');
    include_once('lib/sql.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div  class="container-fluid">
    <header>
        <h2>Prova 29/9/2022</h2>
    </header>
    <section>
    <nav class="as">
        <?php include 'menu_categoria.php';?>
    </nav>
    <article>
        <?php
            if (isset($_GET['label'])) {
                $sql = 'SELECT * FROM caminhos where label = :label ';
                $consulta = $conn->prepare($sql);
                $resultado = $consulta->execute(array("label"=>$_GET['label']));
                $linha  = $consulta-> fetch();
                if ($consulta->rowCount()>0) {
                    require_once $linha['caminho'];
                }else{
                    echo "ERROR!";
                }
            }
            
        ?>
    </article>
    </section>
    <footer>
        <p>Footer</p>
    </footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>