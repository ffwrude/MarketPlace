<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div align='center'>
        <a href='index.php?pg=accueil'>Accueil</a>
        <a href='index.php?pg=products' style='margin-left:20px;'>Produits</a>
    </div>
    <br />
    <?php
        include (__DIR__."/".$page.".php");
    ?>
</body>
</html>