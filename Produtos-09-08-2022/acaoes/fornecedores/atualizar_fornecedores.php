<h1>Atualizar Fornecedor</h1>
<?php

if(isset($_POST['atualizar'])){
    $sql = "UPDATE fornecedores 
    SET NomeCompanhia = :NomeCompanhia,
    NomeContato = :NomeContato,
    TItuloContato = :TItuloContato,
    Endereco = :Endereco,
    Cidade = :Cidade,
    Regiao = :Regiao,
    cep = :cep,
    Pais = :Pais,
    Telefone = :Telefone,
    Fax = :Fax,
    Website = :Website
    WHERE IDFornecedor = :codigo";
    $salvar = $conn->prepare($sql);
    $salvar->execute(array(
        "NomeCompanhia"=>$_POST['NomeCompanhia'], 
        "NomeContato"=>$_POST['NomeContato'], 
        "TItuloContato"=>$_POST['TItuloContato'],
        "Endereco"=>$_POST['Endereco'],
        "Cidade"=>$_POST['Cidade'],
        "Regiao"=>$_POST['Regiao'], 
        "cep"=>$_POST['cep'], 
        "Pais"=>$_POST['Pais'],
        "Telefone"=>$_POST['Telefone'],
        "Fax"=>$_POST['Fax'],
        "Website"=>$_POST['Website'],
        "codigo" => $_GET['codigo']
    ));
    header("Location: ?pagina=listar&listar=fornecedor_listar");
}
$sql = "SELECT * FROM fornecedores WHERE IDFornecedor = :codigo";
    $fornecedor = $conn->prepare($sql);
    $fornecedor->execute(array("codigo"=>$_GET['codigo']));
    $row = $fornecedor->fetch();
?>
<form method="post">
<div class="mb-3">
<label for="nome_s" class="form-label">Nome Companhia</label>
<input type="text" id="nome_s" class="form-control" value="<?php echo $row['NomeCompanhia'];?>" name="NomeCompanhia" placeholder="NomeCompanhia"><br>
<label for="valor_s" class="form-label">Nome do Contato</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['NomeContato'];?>" name="NomeContato" placeholder="NomeContato"><br>
<label for="valor_s" class="form-label">Título Contato</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['TItuloContato'];?>" name="TItuloContato" placeholder="TItuloContato"><br>
<label for="nome_s" class="form-label">Telefone</label>
<input type="text" id="nome_s" class="form-control" value="<?php echo $row['Telefone'];?>" name="Telefone" placeholder="Telefone"><br>
<label for="valor_s" class="form-label">Endereço</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['Endereco'];?>" name="Endereco" placeholder="Endereco"><br>
<label for="valor_s" class="form-label">Cidade</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['Cidade'];?>" name="Cidade" placeholder="Cidade"><br>
<label for="nome_s" class="form-label">Região</label>
<input type="text" id="nome_s" class="form-control" value="<?php echo $row['Regiao'];?>" name="Regiao" placeholder="Regiao"><br>
<label for="valor_s" class="form-label">Cep</label>
<input type="number" id="valor_s" class="form-control" value="<?php echo $row['cep'];?>" name="cep" placeholder="cep"><br>
<label for="valor_s" class="form-label">Pais</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['Pais'];?>" name="Pais" placeholder="Pais"><br>
<label for="valor_s" class="form-label">Fax</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['Fax'];?>" name="Fax" placeholder="Fax"><br>
<label for="valor_s" class="form-label">Website</label>
<input type="text" id="valor_s" class="form-control" value="<?php echo $row['Website'];?>" name="Website" placeholder="Website"><br>
<input type="submit" value="Atualizar" name="atualizar" class="btn btn-primary">
</div>
</form>