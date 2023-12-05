<?php

class mainController extends Controller{

    public function index(){
        //hola
        $params['title'] = "home";
        $this->render ("home/index", $params, "site");
        echo "Estic a Home de main!!!!";
    }
}

?>