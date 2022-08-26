<?php
    if (isset($_POST['deletar'])) {
        $sql = 'DELETE FROM produtos WHERE IDProduto = :codigo';
            $consulta = $conn->prepare($sql);
            $consulta->execute(array("codigo" => $_GET['codigo']));
        header("Location: ?pagina=listar&listar=produto_listar");
    }
?>
<h1>Deletar produto</h1>
<?php
    $sql = '  SELECT p.NomeProduto, p.QuantidadePorUnidade, p.PrecoUnitario, p.UnidadesEmEstoque, f.NomeCompanhia, c.NomeCategoria 
                FROM produtos p 
                inner join fornecedores f on (f.IDFornecedor = p.IDFornecedor) 
                inner join categorias c on (c.IDCategoria = p.IDCategoria) 
                where IDProduto = :codigo';
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("codigo" => $_GET['codigo']));
    $row = $consulta->fetch();
?>
<form method="post">
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Valor Unitário</td>
        <td>Estoque</td>
        <td>Fornecedor</td>
        <td>Categoria</td>
    </tr>
    <tr>
        <td><?php echo $row['NomeProduto']; ?></td>
        <td><?php echo $row['QuantidadePorUnidade']; ?></td>
        <td><?php echo $row['PrecoUnitario']; ?></td>
        <td><?php echo $row['UnidadesEmEstoque']; ?></td>
        <td><?php echo $row['NomeCompanhia']; ?></td>
        <td><?php echo $row['NomeCategoria']; ?></td>
    </tr>

</table>
    <input type="hidden" name="deletar">
    <input type="submit" value="Confirmar Exclusão" class="btn btn-warning">
</form>