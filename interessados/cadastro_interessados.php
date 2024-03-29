<?php
//Carrega a Conexão com Bando de Dados
include_once('lib/conexao.php');

//Função option_estados - Carrega os estados do Banco de Dados e monta os options
function option_estados() {
    $conn = $GLOBALS['conn'];
    //Selecionar os estados do Banco de Dados        
    $sql = "SELECT Uf, Nome FROM estado";
    $consulta = $conn->prepare($sql);
    $estados = $consulta->execute();
    while($r = $consulta->fetch()) {
        echo '<option value="'.$r['Uf'].'">'.$r['Nome'].'</option>';
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/estilo.css">
    <title>Cadastro de Interessados - NewsLetter - DEVs-TI</title>
</head>
<body>
    <h1>INTERESSADOS - NewsLetter - DEVs-TI</h1>
    <div>
        <a href="index.php">Listar</a>
    </div>     
    <br>
    <h2 id="cadastro">Cadastro</h2>
    <br>
    <div id="dMsg"></div> <!-- Área para Mensagens de Validação -->
    <br>
    <form id="fInteressados" action="salvar_interessados.php" method="post">
        <label for="iNome">Nome:</label>
        <input id="iNome" name="iNome" type="input" value="">
        <br>
        <label for="iEmail">e-mail:</label>
        <input id="iEmail" name="iEmail" type="input" value="">
        <br>
        <label for="iFone">fone:</label>
        <input id="iFone" name="iFone" type="input" value="" placeholder="(99) 99999-9999">
        <br>
        <label for="sEstado">Estado:</label>
        <select id="sEstado" name="sEstado"> <!--Esse será alterado-->
            <option value="00">Selecionar</option>
            <?php option_estados(); ?>
        </select>
        <br>
        <label for="sCidade">Cidade:</label>
        <select id="sCidade" name="sCidade"> <!--Esse será alterado-->
            <option value="00">Selecionar</option>
        </select>
        <br><br>
        <input id="bLimpar" type="reset" value="Limpar">&nbsp;|&nbsp;
        <input id="bSalvar" name="bGravar" type="submit" value="Gravar">
    </form>
</body>
<!-- Chamada Biblioteca JS do JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Chamada Biblioteca JS da Aplicação -->
<script language="JavaScript" src="lib/funcoes.js"></script>
</html>
