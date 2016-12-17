<?php
    require ("../Controller/FrontController.php");
    $show = new FrontController();
    if(!isset($_GET["pg"])){
        $show->appel("accueil");
    }else {
        $show->appel($_GET["pg"]);
    }
?>