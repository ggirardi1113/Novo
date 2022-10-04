<?php
if (isset($_POST['deslogar'])) {
  $_SESSION['logado'] = false;
  $_SESSION['email'] = "";
  $_SESSION['senha'] = "";
}
    if($_SESSION['logado']==false){
?>
<center><h1>Cadastro de Usuário</h1></center>
<div class="container-sm">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  <div class="col-12">
    <a href="?label=login" class="btn btn-primary" >Logar</a>
  </div>
</form>
</div>
<?php
    }elseif ($_SESSION['logado']==true) {
        $sql = 'SELECT * FROM usuarios where login = :email AND senha = md5(:senha)';
        $logado = $conn->prepare($sql);
        $logado->execute(array("email"=>$_SESSION['email'], "senha"=> $_SESSION['senha']));
        $usuario  = $logado-> fetch();
?>
    <h1>Informações da Conta</h1>
    <h3><?php echo $usuario['login']?></h3>
    <form method="post">
  <input type="submit" class="btn btn-primary" name="deslogar" value="Deslogar">
</form>
<?php } ?>
