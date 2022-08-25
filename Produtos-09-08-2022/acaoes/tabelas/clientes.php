<?php
    $sql = 'SELECT * FROM clientes';
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Nome Companhia</td>
        <td>Nome Contato</td>
        <td>Título Contato</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Telefone</td>
        <td>Ação</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['NomeCompanhia']; ?></td>
                    <td><?php echo $row['NomeContato']; ?></td>
                    <td><?php echo $row['TituloContato']; ?></td>
                    <td><?php echo $row['Endereco']; ?></td>
                    <td><?php echo $row['Cidade']; ?></td>
                    <td><?php echo $row['Telefone']; ?></td>
                    <td>
                        <a href="?pagina=deletar_clientes&codigo=<?php echo $row['IDCliente'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=atualizar_clientes&codigo=<?php echo $row['IDCliente']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>
