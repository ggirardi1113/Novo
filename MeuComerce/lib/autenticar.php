<?php
    if (isset($_POST['logar'])) {
        $sql = 'SELECT * FROM usuarios where login = :email AND senha = md5(:senha)';
        $consulta = $conn->prepare($sql);
        $consulta->execute(array("email"=>$_POST['email'], "senha" => $_POST['senha']));
        $usuario  = $consulta-> fetch();
        if ($usuario['login'] == $_POST['email']) {
            $_SESSION['logado'] = true;
        }else{
            include_once('erro_usuario.php');
        }
    }
?>