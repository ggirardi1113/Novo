<?php
    $sql = 'SELECT p.IDProduto, p.NomeProduto, p.QuantidadePorUnidade, p.PrecoUnitario, p.UnidadesEmEstoque, f.NomeCompanhia, c.NomeCategoria 
    FROM produtos p 
    inner join fornecedores f on (f.IDFornecedor = p.IDFornecedor) 
    inner join categorias c on (c.IDCategoria = p.IDCategoria)';
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    if(isset($_GET['ocultar'])){
        $_SESSION['ID'][$_SESSION['cont']] = $_GET['ocultar'];
        $_SESSION['cont']++;
    }
?>
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Valor Unitário</td>
        <td>Estoque</td>
        <td>Fornecedor</td>
        <td>Categoria</td>
        <td>Ação</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['NomeProduto']; ?></td>
                    <td><?php echo $row['QuantidadePorUnidade']; ?></td>
                    <td><?php echo $row['PrecoUnitario']; ?></td>
                    <td><?php echo $row['UnidadesEmEstoque']; ?></td>
                    <td><?php echo $row['NomeCompanhia']; ?></td>
                    <td><?php echo $row['NomeCategoria']; ?></td>
                    <td>
                        <a href="?deletar=produto_deletar&codigo=<?php echo $row['IDProduto'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?atualizar=produto_atualizar&codigo=<?php echo $row['IDProduto']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>
