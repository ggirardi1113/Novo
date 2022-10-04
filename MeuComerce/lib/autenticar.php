<?php
    if (isset($_POST['logar'])) {
        if(!empty($_POST['email']) && !empty($_POST['senha'])){
            $sql = 'SELECT * FROM usuarios where login = :email AND senha = md5(:senha)';
            $consulta = $conn->prepare($sql);
            $consulta->execute(array("email"=>$_POST['email'], "senha" => $_POST['senha']));
            $usuario_logado  = $consulta-> fetch();
            if ($usuario_logado['login'] == $_POST['email']) {
                $_SESSION['logado'] = true;
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['senha'] = $_POST['senha'];
                header("Location: ?label=home");
            }else{
                header("Location: ?label=erro&vasio=1");
            }
        }else{
            header("Location: ?label=erro&vasio=0");
        }
    }
?>