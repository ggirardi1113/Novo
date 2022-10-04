<?php
    if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho'])>0) {
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $carrinho = array_keys($_SESSION['carrinho']);
        foreach($carrinho as $item){
            $sql = "SELECT * from produtos where id = :id";
            $produto = $conn->prepare($sql);
            $produto->execute(['id' => $_SESSION['carrinho'][$item]]);
            $produto = $produto->fetch();
            ?>
            <tr>
                
                <td><img src="<?php echo $produto['imagem'] ?>" class="img-thumbnail" width="150" alt=""></td>
                <td><?php echo "<h4 style='color: #2a6f97'>".$produto['nome'].'</h4><br>'. $produto['resumo']."" ?></td>
                <td><?php echo $produto['valor'] ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="produto" value="<?php echo $item; ?>">
                        <input type="submit" class="btn btn-primary" style="background-color: #2a6f97; border:#2a6f97" name="remover_carrinho" value="Remover">
                    </form>
                </td>
            </tr>
        <?php    
        } 
    ?>
  </tbody>
</table>
<hr>
<form method="post">
    <div class="text-center">
        <a href="?pagina=realizar_pedido" class="btn btn-primary botoes-principais" style="text-align:center; vertical-align:bottom; line-height: 50px;">Finalizar Compra</a><br><br>
        <input type="submit" value="Limpar Carrinho" name="del_carrinho" class="btn btn-primary botoes-principais">
    </div>
</form>
<?php 
    } else {
        ?>
        <div class="text-center carrinho-vazio">
            <h2 style="text-transform:uppercase; color:#2a6f97;">Você não tem produtos no carrinho</h2>
        </div><br><br>
        <?php
    }
?>