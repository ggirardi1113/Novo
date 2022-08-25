<h1>Listagem</h1>

<?php
    $sql = 'SELECT p.codigo, p.nome, p.valor, pg.descricao FROM produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id)';
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>


<table class="table table-striped table-bordered">
    
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Grupo</td>
        <td>Ação</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['valor']; ?></td>
                    <td><?php echo $row['descricao']; ?></td>
                    <td>
                        <a href="?pagina=deletar&codigo=<?php echo $row['codigo'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=atualizar&codigo=<?php echo $row['codigo']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>
