<?php
    if (isset($_POST['deletar'])) {
        $sql = 'DELETE FROM fornecedores WHERE IDFornecedor = :codigo';
            $consulta = $conn->prepare($sql);
            $consulta->execute(array("codigo" => $_GET['codigo']));
        header("Location: ?pagina=listar&listar=fornecedor_listar");
    }
?>
<h1>Deletar Fornecedor</h1>
<?php
   $sql = 'SELECT f.NomeCompanhia, f.NomeContato, f.TItuloContato, f.Endereco, f.Cidade, f.cep, f.Pais, f.Telefone, f.IDFornecedor FROM fornecedores f WHERE IDFornecedor = :codigo';
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("codigo" => $_GET['codigo']));
    $row = $consulta->fetch();
?>
<form method="post">
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
    </tr>
    <tr>
        <td><?php echo $row['NomeCompanhia']; ?></td>
        <td><?php echo $row['Pais']; ?></td>
        <td><?php echo $row['Cidade']; ?></td>
        <td><?php echo $row['Endereco']; ?></td>
        <td><?php echo $row['cep']; ?></td>
        <td><?php echo $row['Telefone']; ?></td>
        <td><?php echo $row['NomeContato']; ?></td>
        <td><?php echo $row['TItuloContato']; ?></td>
    </tr>
</table>
    <input type="hidden" name="deletar">
    <input type="submit" value="Confirmar Exclusão" class="btn btn-warning">
</form>