<?php

include (__DIR__."/Model.php");
require (__DIR__."/../Service/ProductManager.php");

class ProductsModel extends Model{
    private $productManager;

    public function __construct(){
        $this->productManager = new ProductManager();
    }

    public function getLastProduct($what){
        try{
            if($what == "array" || $what == "object") {
                $whatFunction = "get" . ucwords(strtolower($what));
                $lastId = $this->productManager->last();
                return $this->productManager->$whatFunction($lastId);
            }else{
                throw new Exception('getLastProduct() needs to know if you want an array or an object. Please use getLastProduct("array") or ("object")');
            }
        }catch(Exception $e){
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
    }

    public function getAllProducts($what){
        $whatFunction = "get".ucwords(strtolower($what));
        return $this->productManager->$whatFunction("");
    }
/*
    public function getLastProduct(){
        $LastProduct = $this->PDO()->query("SELECT * FROM products WHERE id=(SELECT MAX(id) FROM products)");
        return $LastProduct->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProducts(){
        $Products = $this->PDO()->query("SELECT * FROM products");
        return $Products->fetchALL(PDO::FETCH_ASSOC);
    }
*/
}