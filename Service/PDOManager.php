<?php

class PDOManager{
    private $pdo;

    public function init(){
        include ("../app/config.php");
        $this->pdo = new PDO("mysql:dbname=".$db[0].";host=".$db[1],$db[2],$db[3],array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        return $this;
    }

    public function getPDO(){
        return $this->pdo;
    }
}
