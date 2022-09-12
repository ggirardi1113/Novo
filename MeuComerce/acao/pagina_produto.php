<?php
    $sql = 'SELECT p.nome_produto, p.caracteristicas, p.imagem, p.estoque, p.valor, c.descricao 
    FROM produtos p 
    inner join categorias c on (c.id = p.categoria_id)  where p.id = :id';
    $pagina = $conn->prepare($sql);
    $pagina->execute(array("id"=>$_GET['id']));
    $descricao = $pagina->fetch();
?>
<b><?php echo $descricao['nome_produto'];?></b>
<div class="row">
      
    <div class="col-6 col-md-4">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <img  class="img-thumbnail" src="<?php echo $descricao['imagem'];?>" alt="">
        </div>
    </div>
    <div class="col-md-8">
        <div class="shadow p-3 mb-5 bg-body rounded">
            <p><?php echo $descricao['caracteristicas']?></p>
        </div>
    </div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <?php echo "Preço: ",$descricao['valor'];?>
      </div>
    </div>
    <div class="col">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <?php echo "Estoque: ",$descricao['estoque'];?>
      </div>
    </div>
    <div class="col">
      <div class="shadow p-3 mb-5 bg-body rounded">
        <?php echo "Categoria: ",ucwords($descricao['descricao']);?>
      </div>
    </div>
  </div>
</div>
    <a href="?label=produto&pagina=<?php echo $_GET['pagina']?>" class="btn btn-primary">Voltar</a>&nbsp
    <a href="" class="btn btn-info">Adicionar ao Carrinho</a>
