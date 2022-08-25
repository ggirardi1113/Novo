<?php

    if(isset($_POST['gravar'])){
        $sql = "INSERT INTO produtos(NomeProduto, IDFornecedor, IDCategoria, QuantidadePorUnidade, PrecoUnitario) 
        VALUES (:nome, :fornecedor, :categoria, :quantidade, :preco)";
        $salvar = $conn->prepare($sql);
        $salvar->execute(array(
            "nome"=>$_POST['produto_nome'], 
            "preco"=>$_POST['produto_valor'], 
            "quantidade"=>$_POST['quantidade'],
            "fornecedor"=>$_POST['fornecedor'],
            "categoria"=>$_POST['categoria']
        ));
    }
?>
<form method="post">
<div class="mb-3">
    <label for="nome_s" class="form-label">Nome</label>
    <input type="text" id="nome_s" class="form-control" name="produto_nome" placeholder="Nome do Produto"><br>
    <label for="valor_s" class="form-label">Valor</label>
    <input type="number" id="valor_s" class="form-control" name="produto_valor" placeholder="Valor do Produto"><br>
    <label for="valor_s" class="form-label">Quantidade</label>
    <input type="number" id="valor_s" class="form-control" name="quantidade" placeholder="Quantidade Por Unidade"><br>
    <label for="grupo">Categoria</label>
    <select name="categoria" class="form-select">
        <?php
            $sql = "SELECT * from categorias";
            $categoria = $conn->prepare($sql);
            $categoria->execute();
            echo "<option value=00 selected>Selecionar Uma Categoria</option>";
            while ($row = $categoria->fetch()) {
                echo "<option value='",$row['IDCategoria'],"'>",$row['NomeCategoria'],"</option>";
            }
        ?>
    </select><br>
    <label for="grupo">Fornecedor</label>
    <select name="fornecedor" class="form-select">
        <?php
            $sql = "SELECT * from fornecedores";
            $fornecedores = $conn->prepare($sql);
            $fornecedores->execute();
            echo "<option value=00 selected>Selecionar Um Fornecedor</option>";
            while ($row = $fornecedores->fetch()) {
                echo "<option value='",$row['IDFornecedor'],"'>",$row['NomeCompanhia'],"</option>";
            }
        ?>
    </select><br>
    <input type="submit" value="Gravar" name="gravar" class="btn btn-primary">
</div>
</form>