<?php
$username = 'root';
$password = '';

try{
    $conn = new PDO('mysql:host=localhost;dbname=crud', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
}
$data = $conn->query('SELECT * FROM nome');
?><table border=1>
    <tr>
        <td>ID</td>
        <td>Nome</td>
    </tr>
<?php
foreach ($data as $tabela) {
    ?>
    <tr>
        <td><?php echo $tabela['id']; ?></td>
        <td><?php echo $tabela['nomes']; ?></td>
    </tr>
<?php
}
?></table>