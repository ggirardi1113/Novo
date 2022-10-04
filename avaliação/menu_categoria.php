<?php
$sql = 'SELECT * FROM caminhos';
$menu_categoria = $conn->prepare($sql);
$menu_categoria->execute();
    foreach($menu_categoria as $categorias) {
?>

<div class="btn-group" role="group-<?=$categorias['id']?>" aria-label="Button group with nested dropdown">
  <div class="btn-group" role="group-<?=$categorias['id']?>">
    <a href="?label=<?php echo $categorias['label']; ?>" class="btn btn-primary">
    <?php echo $categorias['id']," - ", ucwords ($categorias['label']);?>
    </a>
  </div>
</div>
<hr>
<?php } ?>


