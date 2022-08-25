<?php
    $data = $conn->query('SELECT * FROM filmes');
?>
<table class='table table-striped'>
<tr>
    <td>ID</td>
    <td>Nome</td>
    <td>Resumo</td>
    <td>Ano</td>
    <td>Produtores</td>
    <td>Imagem</td>
</tr>
<?php
foreach ($data as $tabela) {
?>
<tr>
    <td><?php echo $tabela['id']; ?></td>
    <td><?php echo $tabela['nome']; ?></td>
    <td><?php echo $tabela['resumo']; ?></td>
    <td><?php echo $tabela['ano']; ?></td>
    <td><?php echo $tabela['produtores']; ?></td>
    <td><img src="<?php echo $tabela['imagem']; ?>" class='img-fluid img-thumbnail' style='width: 80%;'></td>
</tr>
<?php
}
?></table>