<div class="container-sm">
<form method="post" action="?label=divisao"class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Valor 1</label>
    <input type="number" name="valor1" class="form-control">
  </div>
  <div class="col-12">
    <input type="submit" name="dividir" class="btn btn-primary">
  </div>
</form><br>
    <?php 
       if(isset($_POST['dividir'])){
        $valor1 = $_POST['valor1'];
        if ($valor1%2==0){
            echo "Esse número é dividível por 2!!";
        }else{
            echo "Esse número NÃo é dividível por 2!!";
        }
    }
    ?>
</div>