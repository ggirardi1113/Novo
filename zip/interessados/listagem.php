<h1>Listagem</h1>
<?php
include 'conexao.php';
    $sql = 'SELECT * FROM interessados';
    $consulta = $conn->prepare($sql);
    $consulta->execute();
?>
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Fone</td>
        <td>Estado</td>
        <td>Cidade</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fone']; ?></td>
                    <td><?php echo $row['estado']; ?></td>
                    <td><?php echo $row['cidade']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>