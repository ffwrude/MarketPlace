<?php

require_once (__DIR__."/Controller.php");

class ProductsController extends Controller{
    private $productsModel;
    public function __construct(){
        $this->setProductsModel();
    }

    public function productsAction(){
        $objProductModel = $this->getProductsModel();
        $AllProducts = $objProductModel->getAllProducts("array");
        $this->render("products",$AllProducts);
    }

    public function setProductsModel(){
        require_once ("../Model/ProductsModel.php");
        $this->productsModel = new ProductsModel();
    }

    public function getProductsModel(){
        return $this->productsModel;
    }
}