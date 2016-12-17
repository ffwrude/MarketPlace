<?php

require_once (__DIR__."/Controller.php");

class AdminProductsController extends Controller{
    public function AdminProductsAction(){
        $this->render("adminProducts",array());
    }
}