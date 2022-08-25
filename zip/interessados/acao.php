<?php
include 'conexao.php';
    if(isset($_POST['gravar'])){
        $sql = "INSERT INTO interessados(nome, email, fone, estado, cidade) VALUES (:nome, :email, :fone, :estado, :cidade)";
        $consulta = $conn->prepare($sql);
        $resultado = $consulta->execute(array("nome"=>$_POST['nome'], "email"=>$_POST['email'], "fone"=>$_POST['fone'], "estado"=>$_POST['estado'], "cidade"=>$_POST['cidade'],));
        header("Location: index.html");
    }
    
?>
