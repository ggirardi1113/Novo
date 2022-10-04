<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        $_SESSION['logado'] = false;
    }
    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include_once('lib/autenticar.php');
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
        <h2>Meu Commerce</h2>
    </header>
    <section>
        <?php include 'menu.php'; ?>
    <nav class="as">
        <?php include 'menu_categoria.php';?>
    </nav>
    <article>
        <?php
        if(isset($_POST['add_carrinho'])) {
            $_SESSION['carrinho'][] = $_GET['id'];
        }
        if(isset($_POST['remover_carrinho'])) {
            unset($_SESSION['carrinho'][$_POST['produto']]);
        }
        if(isset($_POST['del_carrinho'])) {
            unset($_SESSION['carrinho']);
        }
            if (isset($_GET['label'])) {
                $sql = 'SELECT * FROM paginas where label = :label ';
                $consulta = $conn->prepare($sql);
                $resultado = $consulta->execute(array("label"=>$_GET['label']));
                $linha  = $consulta-> fetch();
                if ($consulta->rowCount()>0) {
                    require_once $linha['url'];
                }else{
                    echo "ERROR!";
                }
            }else{
                include_once 'login.php';
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