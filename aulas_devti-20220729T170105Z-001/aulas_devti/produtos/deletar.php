<?php
    if (isset($_POST['deletar'])) {
        $sql = "DELETE FROM produtos WHERE codigo = :codigo";
        $parse = $conn->prepare($sql);
        $parse->execute(array("codigo"=>$_GET['codigo']));
        header("Location: ?pagina=produtos_lista");
    }
?>
<h1>Deletar produto</h1>
<?php
    $sql = "SELECT p.codigo, p.nome, p.valor, pg.descricao FROM produtos p inner join produtos_grupos pg on (p.codigo = :codigo)";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("codigo"=>$_GET['codigo']));
    $row = $consulta->fetch();
?>
<form method="post">
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Grupo</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['valor']; ?></td>
                    <td><?php echo $row['descricao']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>
    <input type="hidden" name="deletar">
    <input type="submit" value="Confirmar Exclusão" class="btn btn-warning">
</form>