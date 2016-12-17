<?php

class FrontController{
    public function appel($controller){
        require (__DIR__."/".$controller."Controller.php");
        $temp = $controller."Controller";
        $show = new $temp();
        $temp = $controller."Action";
        $show->$temp();
    }
}
?>