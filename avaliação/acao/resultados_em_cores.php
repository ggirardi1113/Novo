<div class="container-sm">
<form method="post" action="?label=valores"class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Valor 1</label>
    <input type="number" name="valor1" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Valor 2</label>
    <input type="number" name="valor2" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Valor 3</label>
    <input type="number" name="valor3" class="form-control">
  </div>
  <div class="col-12">
    <input type="submit" name="calcular" class="btn btn-primary">
  </div>
</form><br>
    <?php 
       if(isset($_POST['calcular'])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];
        $resultado = $valor1 + $valor2 + $valor3;
        if ($valor1>10) {
          echo "<p style='color: blue;'>",$resultado,"</p>";
         }elseif ($valor2<$valor3) {
          echo "<p style='color: green;'>",$resultado,"</p>";
         }elseif ($valor3<$valor2 && $valor3<$valor1) {
          echo "<p style='color: red;'>",$resultado,"</p>";
         }
    }
    ?>
</div>