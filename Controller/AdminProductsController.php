<?php

require_once (__DIR__."/Controller.php");
require_once ("../Service/ProductManager.php");

class AdminProductsController extends Controller{
    public function AdminProductsAction(){
        if(isset($_POST) && $_POST) {    //&& $_POST => SI $_POST est pas vide.
            /*require_once ("../Model/AdminProductsTraitement.php");
            $insert = new AdminProductsTraitement($_POST);
            $insert->doInsert();*/
            $insert = new ProductManager();
            if(!isset($_POST["id"])){
                $insert->add($_POST);
            }else{
                $insert->update($_POST,$_POST["id"]);
            }
        }
        $tableau = "";
        if(isset($_GET["id"]) && $_GET["id"]){
            $get = new ProductManager();
            $tableau = $get->getArray($_GET["id"]);
        }
        $this->render("adminProducts",$tableau);
    }
}