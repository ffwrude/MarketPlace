<?php

require (__DIR__."/Controller.php");
class AccueilController extends Controller{
    private $productsModel;
    public function __construct(){
        $this->setProductsModel();
    }

    public function accueilAction(){
        $objProductModel = $this->getProductsModel();
        $lastProduct = $objProductModel->getLastProduct();
        $this->render("accueil",$lastProduct);
    }

    public function setProductsModel(){
        include ("../Model/ProductsModel.php");
        $this->productsModel = new ProductsModel();
    }

    public function getProductsModel(){
        return $this->productsModel;
    }
}