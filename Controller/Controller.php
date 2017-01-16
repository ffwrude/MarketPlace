<?php

abstract class Controller{
    protected function PDO(){
        include ("../Service/PDOManager.php");
        $pdo = new PDOManager();
        $pdo->init();
        return $pdo->getPdo();
    }

    protected function render($page,$array){ //$array norme ce qu'on va récuperer dans les vues.
        include(__DIR__ . "/../view/layout.php");
    }
}