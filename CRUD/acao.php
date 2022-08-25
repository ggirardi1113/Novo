<?php
$username = 'root';
$password = '';

try{
    $conn = new PDO('mysql:host=localhost;dbname=crud', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
}

/*if (isset($_GET['listartodos'])) {
    $data = $conn->query('SELECT * FROM nome');
    foreach ($data as $row) {
        print_r($row);
    }
}
if(isset($_GET['listar1'])){
    $stmt=$conn->prepare('SELECT * FROM nome WHERE id = :id');
    $stmt->execute(array('id' => $_GET['listar1']));
    while ($row = $stmt->fetch()) {
        print_r($row);
    }
}
if (isset($_GET['gravar'])) {
    $stmt=$conn->prepare('INSERT INTO nome(nomes) values (:nomes)');
    $stmt->execute(array('nomes' => $_GET['nomes']));
}
if (isset($_GET['atualizar'])) {
    $stmt=$conn->prepare('UPDATE nome set nomes=:nomes where id=:id');
    $stmt->execute(array('nomes' => $_GET['nomes'], 'id' => $_GET['id']));
}
if (isset($_GET['remover'])) {
    $stmt=$conn->prepare('DELETE FROM nome where id = :id');
    $stmt->execute(array('id' => $_GET['id']));
}
*/

?>