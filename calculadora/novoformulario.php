<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<?php 
    session_start();
    include 'acao.php';
?>
</head>
<body>
<header>
  <h2>Funções</h2>
</header>
<section>
  <nav>
    <?php include "curriculo_menu.php";?>
  </nav>
  
  <article>
    <?php
        if (isset($_GET['pagina'])) {
            if (file_exists($_GET['pagina'].".php")) {
                include $_GET['pagina'].".php";
            }
        } else {
            include "curriculo_corpo.php";
        }
    ?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

