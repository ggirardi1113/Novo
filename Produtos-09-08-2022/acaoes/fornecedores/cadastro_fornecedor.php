
<?php

    if(isset($_POST['gravar'])){
        $sql = "INSERT INTO fornecedores(NomeCompanhia, NomeContato, TituloContato, Endereco, Cidade, Regiao, cep, Pais, Telefone, Fax, Website) 
        VALUES (:NomeCompanhia, :NomeContato, :TituloContato, :Endereco, :Cidade, :Regiao, :cep, :Pais, :Telefone, :Fax, :Website)";
        $salvar = $conn->prepare($sql);
        $salvar->execute(array(
            "NomeCompanhia"=>$_POST['NomeCompanhia'], 
            "NomeContato"=>$_POST['NomeContato'], 
            "TituloContato"=>$_POST['TituloContato'],
            "Endereco"=>$_POST['Endereco'],
            "Cidade"=>$_POST['Cidade'],
            "Regiao"=>$_POST['Regiao'], 
            "cep"=>$_POST['cep'], 
            "Pais"=>$_POST['Pais'],
            "Telefone"=>$_POST['Telefone'],
            "Fax"=>$_POST['Fax'],
            "Website"=>$_POST['Website']
        ));
    }
?>
<form method="post">
<div class="mb-3">
    <label for="nome_s" class="form-label">Nome Companhia</label>
    <input type="text" id="nome_s" class="form-control" name="NomeCompanhia" placeholder="NomeCompanhia"><br>
    <label for="valor_s" class="form-label">Nome do Contato</label>
    <input type="text" id="valor_s" class="form-control" name="NomeContato" placeholder="NomeContato"><br>
    <label for="valor_s" class="form-label">Título Contato</label>
    <input type="text" id="valor_s" class="form-control" name="TituloContato" placeholder="TituloContato"><br>
    <label for="nome_s" class="form-label">Telefone</label>
    <input type="text" id="nome_s" class="form-control" name="Telefone" placeholder="Telefone"><br>
    <label for="valor_s" class="form-label">Endereço</label>
    <input type="text" id="valor_s" class="form-control" name="Endereco" placeholder="Endereco"><br>
    <label for="valor_s" class="form-label">Cidade</label>
    <input type="text" id="valor_s" class="form-control" name="Cidade" placeholder="Cidade"><br>
    <label for="nome_s" class="form-label">Região</label>
    <input type="text" id="nome_s" class="form-control" name="Regiao" placeholder="Regiao"><br>
    <label for="valor_s" class="form-label">Cep</label>
    <input type="number" id="valor_s" class="form-control" name="cep" placeholder="cep"><br>
    <label for="valor_s" class="form-label">Pais</label>
    <input type="text" id="valor_s" class="form-control" name="Pais" placeholder="Pais"><br>
    <label for="valor_s" class="form-label">Fax</label>
    <input type="text" id="valor_s" class="form-control" name="Fax" placeholder="Fax"><br>
    <label for="valor_s" class="form-label">Website</label>
    <input type="text" id="valor_s" class="form-control" name="Website" placeholder="Website"><br>
    <input type="submit" value="Gravar" name="gravar" class="btn btn-primary">
</div>
</form>