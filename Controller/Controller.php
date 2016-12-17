<?php

abstract class Controller{
    protected function PDO(){
        include ("../Service/PDOManager.php");
        $pdo = new PDOManager();
        $pdo->init();
        return $pdo->getPdo();
    }

    protected function render($page,$array){
        include(__DIR__ . "/../view/layout.php");
    }
}