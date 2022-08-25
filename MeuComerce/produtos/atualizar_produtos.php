<?php

    if(isset($_POST['atualizar'])){
        $sql = "UPDATE produtos SET NomeProduto = :nome, IDFornecedor = :fornecedor, IDCategoria = :categoria, QuantidadePorUnidade = :quantidade, PrecoUnitario = :preco where IDProduto = :codigo";
        $salvar = $conn->prepare($sql);
        $salvar->execute(array(
            "nome"=>$_POST['produto_nome'], 
            "preco"=>$_POST['produto_valor'], 
            "quantidade"=>$_POST['quantidade'],
            "fornecedor"=>$_POST['fornecedor'],
            "categoria"=>$_POST['categoria'],
            "codigo" => $_GET['codigo']
        ));
    }
    $sql = "SELECT * FROM produtos WHERE IDProduto = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=>$_GET['codigo']));
    $linha = $produto->fetch();
?>
<form method="post">
<div class="mb-3">
    <label for="nome_s" class="form-label">Nome</label>
    <input type="text" id="nome_s" class="form-control" value="<?php echo $linha['NomeProduto']; ?>" name="produto_nome" placeholder="Nome do Produto"><br>
    <label for="valor_s" class="form-label">Valor</label>
    <input type="number" id="valor_s" class="form-control" value="<?php echo $linha['PrecoUnitario']; ?>" name="produto_valor" placeholder="Valor do Produto"><br>
    <label for="valor_s" class="form-label">Quantidade</label>
    <input type="number" id="valor_s" class="form-control" value="<?php echo $linha['QuantidadePorUnidade']; ?>" name="quantidade" placeholder="Quantidade Por Unidade"><br>
    <label for="grupo">Categoria</label>
    <select name="categoria" class="form-select">
        <?php
            $sql = "SELECT * from categorias";
            $categoria = $conn->prepare($sql);
            $categoria->execute();
            while ($row = $categoria->fetch()) {
                if($row['IDCategoria']==$linha['IDCategoria']){
                    echo "<option value='",$row['IDCategoria'],"' selected>",$row['NomeCategoria'],"</option>";
                }else{
                    echo "<option value='",$row['IDCategoria'],"'>",$row['NomeCategoria'],"</option>";
                }
            }
        ?>
    </select><br>
    <label for="grupo">Fornecedor</label>
    <select name="fornecedor" class="form-select">
        <?php
            $sql = "SELECT * from fornecedores";
            $fornecedores = $conn->prepare($sql);
            $fornecedores->execute();
            while ($row = $fornecedores->fetch()) {
                if($row['IDFornecedor']==$linha['IDFornecedor']){
                    echo "<option value='",$row['IDFornecedor'],"' selected>",$row['NomeCompanhia'],"</option>";
                }else{
                    echo "<option value='",$row['IDFornecedor'],"'>",$row['NomeCompanhia'],"</option>";
                }
            }
        ?>
    </select><br>
    <input type="submit" value="Atualizar" name="atualizar" class="btn btn-primary">
</div>
</form>