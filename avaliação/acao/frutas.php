<form action="?label=frutas" method="post">
<div class="row">
<?php
    $sql = "SELECT * from frutas";
    $produtos = $conn->prepare($sql);
    $produtos->execute();
    $i=0;
    foreach($produtos as $row){
?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $row['nome']?></h5>
        <p class="card-text">Preço por Kg: R$<?php echo $row['preco'];?><br>Peso <?php echo $row['peso'];?> Kg</p>
        <label for="fruta<?php echo $row['id'];?>" class="form-label">Quantidade</label>
        <input type="number" name="fruta<?php echo $row['id'];?>">
        <?php 
            $preco[$i] = $row['preco'];
            $i++;
        ?>
    </div>
</div>
<?php }?>
</div><br>
<label for="saldo" class="form-label">Informe Seu Slado</label>
<input type="text" name="saldo">
<br><input type="submit" value="Comprar" name="Comprar" class="btn btn-primary">
</form>
<?php 
    if (isset($_POST['Comprar'])) {
        $maca = $_POST['fruta1']*$preco[0];
        $melancia = $_POST['fruta2']*$preco[1];
        $laranja = $_POST['fruta3']*$preco[2];
        $repolho = $_POST['fruta4']*$preco[3];
        $cenoura = $_POST['fruta5']*$preco[4];
        $batata = $_POST['fruta6']*$preco[5];
        $ValorTotal = $maca + $melancia + $laranja + $repolho + $cenoura + $batata;
        if ($ValorTotal==$_POST['saldo']) {
            echo "<p style='color:green;'>O Saldo todo foi Gasto!!</p>"; 
        }elseif($ValorTotal>$_POST['saldo']){
            $extra = $ValorTotal-$_POST['saldo'];
            echo "<p style='color:red;'>O Saldo é insuficiente!! Lhe Falta R$ ",$extra,"</p>"; 
        }else{
            $extra = $_POST['saldo']-$ValorTotal;
            echo "<p style='color:blue;'>O Saldo é Maior que a Dívida!! Você tem de extra R$ ",$extra,"</p>"; 
        }
    }
?>