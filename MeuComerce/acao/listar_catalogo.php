<div class="row">
<?php
    $sql = "SELECT * from produtos where categoria_id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array("id"=>$_GET['pagina']));
    foreach($produtos as $row){
?>
<div class="card" style="width: 18rem;">
    <img src="<?php echo $row['imagem']?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $row['nome_produto']?></h5>
        <p class="card-text"><?php $row['resumo']?></p>
        <a href="?label=descricao&id=<?php echo $row['id'];?>&pagina=<?php echo $_GET['pagina'];?>" class="btn btn-primary">Informações</a>
    </div>
</div>
<?php }?>
</div>