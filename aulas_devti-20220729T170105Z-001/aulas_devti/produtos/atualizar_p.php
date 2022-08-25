<center><h1>Atualizar</h1></center>
<?php
if (isset($_POST['atualizar'])) {
    $sql = "UPDATE produtos SET nome = :nome, valor = :valor, grupo_id = :grupo WHERE codigo = :codigo";
    $atualixar = $conn->prepare($sql);
    $atualixar->execute(array("codigo"=>$_GET['codigo'], "nome"=>$_POST['produto_nome'], "valor"=>$_POST['produto_valor'], "grupo"=>$_POST['grupo']));
    header("Location: ?pagina=produtos_lista");
}
    $sql = "SELECT * FROM produtos WHERE codigo = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=>$_GET['codigo']));
    $row = $produto->fetch();
?>
<form method="post">
    <div class="mb-3">
    <label for="nome_s" class="form-label">Nome</label>
    <input type="text" id="nome_s" class="form-control" name="produto_nome" value="<?php echo $row['nome']; ?>"><br>
    <label for="valor_s" class="form-label">Valor</label>
    <input type="number" id="valor_s" class="form-control" name="produto_valor" value="<?php echo $row['valor']; ?>"><br>
    <label for="grupo">Grupo</label>
    <select name="grupo" class="form-select">
        <?php
            $sql = "SELECT * from produtos_grupos";
            $grupo = $conn->prepare($sql);
            $grupo->execute();
            while ($row_select = $grupo->fetch()) {
                if ($row_select['id']== $row['grupo_id']) {
                    echo "<option value='",$row_select['id'],"' selected>",$row_select['descricao'],"</option>";
                }else{
                    echo "<option value='",$row_select['id'],"'>",$row_select['descricao'],"</option>";
                }
                
            }
        ?>
    </select><br>
    <input type="submit" value="Atualizar" name="atualizar" class="btn btn-primary">
    </div>
</form>