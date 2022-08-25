
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
    if (isset($_SESSION['cont'])==false) {
       $_SESSION['cont']=0;
    }   
    $_SESSION['ID']= array();
    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include 'menu.php';
    if (isset($_GET['pagina'])&&$_GET['pagina']=='listar') {
        include ('acaoes/listar.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='deletar_produtos') {
        include ('acaoes/produtos/deletar_produtos.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='atualizar_produtos') {
        include ('acaoes/produtos/atualizar_produtos.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='deletar_fornecedores') {
        include ('acaoes/fornecedores/deletar_fornecedores.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='atualizar_fornecedores') {
        include ('acaoes/fornecedores/atualizar_fornecedores.php');
    }elseif (isset($_GET['pagina'])&&$_GET['pagina']=='cadastros') {
        include ('acaoes/cadastros.php');
    }
    if (isset($_GET['listar'])&&$_GET['listar']=='fornecedores') {
        include ('acaoes/tabelas/fornecedores.php');
    }elseif (isset($_GET['listar'])&&$_GET['listar']=='produtos') {
        include ('acaoes/tabelas/produtos.php');
    }elseif (isset($_GET['listar'])&&$_GET['listar']=='clientes') {
        include ('acaoes/tabelas/clientes.php');
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