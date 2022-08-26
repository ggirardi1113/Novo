<?php
    if (isset($_POST['deletar'])) {
        $sql = 'DELETE FROM clientes WHERE IDCliente = :codigo';
            $consulta = $conn->prepare($sql);
            $consulta->execute(array("codigo" => $_GET['codigo']));
        header("Location: ?pagina=listar&listar=clientes");
    }
?>
<h1>Deletar Cliente</h1>
<?php
    $sql = 'SELECT * FROM clientes where IDCliente = :codigo';
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("codigo" => $_GET['codigo']));
    $row = $consulta->fetch();
?>
<form method="post">
<table class="table table-striped table-bordered">
    
    <tr>
        <td>Nome Companhia</td>
        <td>Nome Contato</td>
        <td>Título Contato</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Telefone</td>
    </tr>
    <tr>
        <td><?php echo $row['NomeCompanhia']; ?></td>
        <td><?php echo $row['NomeContato']; ?></td>
        <td><?php echo $row['TituloContato']; ?></td>
        <td><?php echo $row['Endereco']; ?></td>
        <td><?php echo $row['Cidade']; ?></td>
        <td><?php echo $row['Telefone']; ?></td>
    </tr>
</table>
    <input type="hidden" name="deletar">
    <input type="submit" value="Confirmar Exclusão" class="btn btn-warning">
</form>