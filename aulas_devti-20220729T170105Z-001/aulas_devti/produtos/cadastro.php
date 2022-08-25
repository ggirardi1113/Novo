<h1>Cadastro</h1>

<?php

    if(isset($_POST['gravar'])){
        $sql = "INSERT INTO produtos(nome, valor,grupo_id) VALUES (:nome,:valor,:grupo_id)";
        $consulta = $conn->prepare($sql);
        $resultado = $consulta->execute(array("nome"=>$_POST['produto_nome'], "valor"=>$_POST['produto_valor'], "grupo_id"=>$_POST['produto_grupo_id']));
    }
?>
<form method="post">
<div class="mb-3">
    <label for="nome_s" class="form-label">Nome</label>
    <input type="text" id="nome_s" class="form-control" name="produto_nome" placeholder="Nome do Produto"><br>
    <label for="valor_s" class="form-label">Valor</label>
    <input type="number" id="valor_s" class="form-control" name="produto_valor" placeholder="Valor do Produto"><br>
    <label for="grupo">Grupo</label>
    <select name="produto_grupo_id" class="form-select">
        <?php
            $sql = "SELECT * from produtos_grupos";
            $consulta = $conn->prepare($sql);
            $resultado = $consulta->execute();
            while ($row = $consulta->fetch()) {
                echo "<option value='",$row['id'],"'>",$row['descricao'],"</option>";
            }
        ?>
    </select><br>
    <input type="submit" value="Gravar" name="gravar" class="btn btn-primary">
</div>
</form>