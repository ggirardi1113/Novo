<nav class="navbar navbar-expand-lg bg-light">
    <?php
        $sql = "SELECT * FROM paginas";
        $consulta = $conn->prepare($sql);
        $resultado = $consulta->execute();
        while($menu_row = $consulta->fetch()) {
            echo '<a href="?pagina=',$menu_row['id'],'" class="btn btn-info">',$menu_row['label'],'</a>&nbsp';
        }
    ?>
</nav>
<hr>