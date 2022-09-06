<?php
$sql = 'SELECT * FROM categorias where categoria_pai is null';
$menu_categoria = $conn->prepare($sql);
$menu_categoria->execute();
    foreach($menu_categoria as $categorias) {
?>

<div class="btn-group" role="group-<?=$categorias['id']?>" aria-label="Button group with nested dropdown">
  <div class="btn-group" role="group-<?=$categorias['id']?>">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <?php echo ucwords ($categorias['descricao']);?>
    </button>&nbsp
    <ul class="dropdown-menu">
    <?php
            $sql = "SELECT * from categorias where categoria_pai = :id";
            $option_categorias = $conn->prepare($sql);
            $option_categorias->execute(array("id"=>$categorias['id']));
            while ($row = $option_categorias->fetch()) {
                echo "<li><a class='dropdown-item' href='?opcao=",$row['id'],"'>",ucwords($row['descricao']),"</a></li>";
            }
        ?>
    </ul>
  </div>
</div>
<?php } ?>


