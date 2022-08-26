
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
    if (isset($_GET['pagina'])) {
        $sql = 'SELECT * FROM paginas where id = :id';
        $consulta = $conn->prepare($sql);
        $resultado = $consulta->execute(array("id"=>$_GET['pagina']));
        $linha  = $consulta-> fetch();
        include 'menu.php';
        if ($consulta->rowCount()>0) {
            require_once $linha['src'];
        }else{
            echo "ERROR!";
        }
    }else{
        include 'login.php';
    }
    if (isset($_GET['deletar'])) {
        $sql = 'SELECT * FROM paginas_acaoes where id = :id';
        $deletar = $conn->prepare($sql);
        $deletar_resultado = $deletar->execute(array("id"=>$_GET['deletar']));
        $_deletarlinha  = $deletar-> fetch();
        if ($deletar->rowCount()>0) {
            require_once $_deletarlinha['src'];
        }else{
            echo "ERROR!";
        }
    }
    if (isset($_GET['atualizar'])) {
        $sql = 'SELECT * FROM paginas_acaoes where id = :id';
        $atualizar = $conn->prepare($sql);
        $atualizar_resultado = $atualizar->execute(array("id"=>$_GET['atualizar']));
        $atualizar_linha  = $atualizar-> fetch();
        if ($atualizar->rowCount()>0) {
            require_once $atualizar_linha['src'];
        }else{
            echo "ERROR!";
        }
    }
    if (isset($_GET['pagina'])&&$_GET['pagina']=='deletar_produtos') {
        include ('acaoes/produtos/deletar_produtos.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='atualizar_produtos') {
        include ('acaoes/produtos/atualizar_produtos.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='deletar_fornecedores') {
        include ('acaoes/fornecedores/deletar_fornecedores.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='atualizar_fornecedores') {
        include ('acaoes/fornecedores/atualizar_fornecedores.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='atualizar_clientes') {
        include ('acaoes/clientes/atualizar_clientes.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='deletar_clientes') {
        include ('acaoes/clientes/deletar_clientes.php');
    }
    if (isset($_GET['listar'])) {
        $sql = 'SELECT * FROM paginas_acaoes where id = :id';
        $listar = $conn->prepare($sql);
        $listar_resultado = $listar->execute(array("id"=>$_GET['listar']));
        $listar_linha  = $listar-> fetch();
        if ($listar->rowCount()>0) {
            require_once $listar_linha['src'];
        }else{
            echo "ERROR!";
        }
    }
    if (isset($_GET['cadastros'])&&$_GET['cadastros']=='fornecedores') {
        include ('acaoes/fornecedores/cadastro_fornecedor.php');
    }elseif (isset($_GET['cadastros'])&&$_GET['cadastros']=='produtos') {
        include ('acaoes/produtos/cadastro_produtos.php');
    }elseif (isset($_GET['cadastros'])&&$_GET['cadastros']=='clientes') {
        include ('acaoes/clientes/cadastro_clientes.php');
    }
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>