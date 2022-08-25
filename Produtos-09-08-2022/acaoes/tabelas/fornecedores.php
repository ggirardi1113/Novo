<?php
    $sql = 'SELECT f.NomeCompanhia, f.NomeContato, f.TItuloContato, f.Endereco, f.Cidade, f.cep, f.Pais, f.Telefone, f.IDFornecedor FROM fornecedores f';
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Companhia</td>
        <td>Pais</td>
        <td>Cidade</td>
        <td>Endereço</td>
        <td>Cep</td>
        <td>Telefone</td>
        <td>Nome do Contato</td>
        <td>Título do Contato</td>
        <td>Ação</td>
    </tr>
    <?php
        foreach($consulta as $row) {
            ?>
                <tr>
                    <td><?php echo $row['NomeCompanhia']; ?></td>
                    <td><?php echo $row['Pais']; ?></td>
                    <td><?php echo $row['Cidade']; ?></td>
                    <td><?php echo $row['Endereco']; ?></td>
                    <td><?php echo $row['cep']; ?></td>
                    <td><?php echo $row['Telefone']; ?></td>
                    <td><?php echo $row['NomeContato']; ?></td>
                    <td><?php echo $row['TItuloContato']; ?></td>
                    <td>
                        <a href="?pagina=deletar_fornecedores&tabela=fornecedores&codigo=<?php echo $row['IDFornecedor'];?>" class="btn btn-danger">Deletar</a><br>
                        <a href="?pagina=atualizar_fornecedores&tabela=fornecedores&codigo=<?php echo $row['IDFornecedor']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>
