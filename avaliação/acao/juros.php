<p>Valor da Moto: R$8.654,00</p>
<form action="?label=juros" method="post">
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
        if($Veses==24){
            $J = (8654 / $Veses)*0.015;
        }elseif ($Veses==36) {
            $J = (8654 / $Veses)*0.020;
        }elseif ($Veses==48) {
            $J = (8654 / $Veses)*0.025;
        }else{
            $J = (8654 / $Veses)*0.030;
        }
        $P = (8654 / $Veses)+$J;
        echo "Parcelas de R$",$P," devem ser pagas!!";
    }
?>