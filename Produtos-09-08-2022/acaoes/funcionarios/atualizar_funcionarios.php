<?php

    if(isset($_POST['atualizar'])){
        $sql = "UPDATE clientes SET 
        NomeCompanhia = :NomeCompanhia, 
        NomeContato = :NomeContato, 
        TituloContato = :TituloContato, 
        Endereco = :Endereco, 
        Cidade = :Cidade, 
        Regiao = :Regiao, 
        CEP = :CEP, 
        Pais = :Pais, 
        Telefone = :Telefone, 
        Fax = :Fax
        where IDCliente = :IDCliente";
        $salvar = $conn->prepare($sql);
        $salvar->execute(array(
            "IDCliente"=>$_GET['codigo'], 
            "NomeCompanhia"=>$_POST['NomeCompanhia'], 
            "NomeContato"=>$_POST['NomeContato'], 
            "TituloContato"=>$_POST['TituloContato'],
            "Endereco"=>$_POST['Endereco'],
            "Cidade"=>$_POST['Cidade'],
            "Regiao"=>$_POST['Regiao'], 
            "CEP"=>$_POST['CEP'], 
            "Pais"=>$_POST['Pais'],
            "Telefone"=>$_POST['Telefone'],
            "Fax"=>$_POST['Fax']
        ));
    }
    $sql = "SELECT * FROM clientes WHERE IDCliente = :codigo";
    $cliente = $conn->prepare($sql);
    $cliente->execute(array("codigo"=>$_GET['codigo']));
    $row = $cliente->fetch();
?>
<form method="post">
<div class="mb-3">
    <label for="nome_s" class="form-label">Nome Companhia</label>
    <input value="<?php echo $row['NomeCompanhia']; ?>" type="text" id="nome_s" class="form-control" name="NomeCompanhia"><br>
    <label for="valor_s" class="form-label">Nome Contato</label>
    <input value="<?php echo $row['NomeContato']; ?>" type="text" id="valor_s" class="form-control" name="NomeContato"><br>
    <label for="valor_s" class="form-label">Título Contato</label>
    <input value="<?php echo $row['TituloContato']; ?>" type="text" id="valor_s" class="form-control" name="TituloContato"><br>
    <label for="nome_s" class="form-label">Endereço</label>
    <input value="<?php echo $row['Endereco']; ?>" type="text" id="nome_s" class="form-control" name="Endereco"><br>
    <label for="valor_s" class="form-label">Cidade</label>
    <input value="<?php echo $row['Cidade']; ?>" type="text" id="valor_s" class="form-control" name="Cidade"><br>
    <label for="valor_s" class="form-label">Região</label>
    <input value="<?php echo $row['Regiao']; ?>" type="text" id="valor_s" class="form-control" name="Regiao"><br>
    <label for="nome_s" class="form-label">CEP</label>
    <input value="<?php echo $row['CEP']; ?>" type="text" id="nome_s" class="form-control" name="CEP"><br>
    <label for="valor_s" class="form-label">País</label>
    <input value="<?php echo $row['Pais']; ?>" type="text" id="valor_s" class="form-control" name="Pais"><br>
    <label for="valor_s" class="form-label">Telefone</label>
    <input value="<?php echo $row['Telefone']; ?>" type="text" id="valor_s" class="form-control" name="Telefone"><br>
    <label for="valor_s" class="form-label">Fax</label>
    <input value="<?php echo $row['Fax']; ?>" type="text" id="valor_s" class="form-control" name="Fax"><br>
    <input type="submit" value="Atualizar" name="atualizar" class="btn btn-primary">
</div>
</form>