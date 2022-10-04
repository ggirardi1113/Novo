<?php 
    if($_GET['vasio']==0){?>
        <h2>Email ou Senha Vasios!!!!</h2><br>
        <a href='?label=login' class='btn btn-primary'>Voltar</a>
    <?php }else{
?>
    <h1>Usuário ou Senha Incorretos!!</h1>
    <a href='?label=login' class='btn btn-primary'>Voltar</a>
<?php } ?>