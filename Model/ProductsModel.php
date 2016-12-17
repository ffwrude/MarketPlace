<?php

include (__DIR__."/Model.php");

class ProductsModel extends Model{
    public function getLastProduct(){
        $LastProduct = $this->PDO()->query("SELECT * FROM products WHERE id=(SELECT MAX(id) FROM products)");
        return $LastProduct->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllProducts(){
        $Products = $this->PDO()->query("SELECT * FROM products");
        return $Products->fetchALL(PDO::FETCH_ASSOC);
    }
}