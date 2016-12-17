<?php
    require ("../Controller/FrontController.php");
    $show = new FrontController();
    $show->appel($_GET["pg"]);
?>