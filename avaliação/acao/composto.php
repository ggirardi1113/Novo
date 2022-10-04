<form action="?label=composto" method="post">
<label for="entrada" class="form-label">Valor de Entrada</label>
<input type="text" name="entrada"><br>
<div class="form-check">
  <input class="form-check-input" type="radio" value="24" name="veses" id="veses1">
  <label class="form-check-label" for="veses1">
    24 Vezes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="36" name="veses" id="veses2">
  <label class="form-check-label" for="veses2">
    36 Vezes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="48" name="veses" id="veses3">
  <label class="form-check-label" for="veses3">
    48 Vezes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="60" name="veses" id="veses4">
  <label class="form-check-label" for="veses4">
    60 Vezes
  </label>
</div><br>
<input type="submit" value="Calc" name="Calc" class="btn btn-primary">
</form>
<?php
    if (isset($_POST['Calc'])) {
        $Veses = $_POST['veses'];
        $entrada = $_POST['entrada'];
        if($Veses==24){
            $pow = pow(1.02,24);
            $M = $entrada*$pow;
        }elseif ($Veses==36) {
            $pow = pow(1.023,24);
            $M = $entrada*$pow;
        }elseif ($Veses==48) {
            $pow = pow(1.026,24);
            $M = $entrada*$pow;
        }else{
            $pow = pow(1.029,24);
            $M = $entrada*$pow;
        }
        $P = $M/$Veses;
        echo "Parcelas de R$",$P," devem ser pagas!!";
    }
?>