<?php

    if(isset($_POST['gravar'])){
        $sql = "INSERT INTO clientes(IDCliente, NomeCompanhia, NomeContato, TituloContato, Endereco, Cidade, Regiao, CEP, Pais, Telefone, Fax) 
        VALUES (:IDCliente, :NomeCompanhia, :NomeContato, :TituloContato, :Endereco, :Cidade, :Regiao, :CEP, :Pais, :Telefone, :Fax)";
        $salvar = $conn->prepare($sql);
        $salvar->execute(array(
            "IDCliente"=>$_POST['IDCliente'], 
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
?>
<form method="post">
<div class="mb-3">
    <label for="nome_s" class="form-label">ID</label>
    <input type="text" id="nome_s" class="form-control" name="IDCliente"><br>
    <label for="nome_s" class="form-label">Nome Companhia</label>
    <input type="text" id="nome_s" class="form-control" name="NomeCompanhia"><br>
    <label for="valor_s" class="form-label">Nome Contato</label>
    <input type="text" id="valor_s" class="form-control" name="NomeContato"><br>
    <label for="valor_s" class="form-label">Título Contato</label>
    <input type="text" id="valor_s" class="form-control" name="TituloContato"><br>
    <label for="nome_s" class="form-label">Endereço</label>
    <input type="text" id="nome_s" class="form-control" name="Endereco"><br>
    <label for="valor_s" class="form-label">Cidade</label>
    <input type="text" id="valor_s" class="form-control" name="Cidade"><br>
    <label for="valor_s" class="form-label">Região</label>
    <input type="text" id="valor_s" class="form-control" name="Regiao"><br>
    <label for="nome_s" class="form-label">CEP</label>
    <input type="text" id="nome_s" class="form-control" name="CEP"><br>
    <label for="valor_s" class="form-label">País</label>
    <input type="text" id="valor_s" class="form-control" name="Pais"><br>
    <label for="valor_s" class="form-label">Telefone</label>
    <input type="text" id="valor_s" class="form-control" name="Telefone"><br>
    <label for="valor_s" class="form-label">Fax</label>
    <input type="text" id="valor_s" class="form-control" name="Fax"><br>
    <input type="submit" value="Gravar" name="gravar" class="btn btn-primary">
</div>
</form>