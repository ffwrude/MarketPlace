<?php

abstract class Model{
    protected function PDO(){
        include (__DIR__."/../Service/PDOManager.php");
        $pdo = new PDOManager();
        $pdo->init();
        return $pdo->getPdo();
    }
}