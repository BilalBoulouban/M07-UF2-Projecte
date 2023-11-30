<?php

class Orm{

    protected $model;

    public function __construct($model){

        $this->model = $model;
        if(!isset($_SESSION[$model])){
            $_SESSION[$model] = [];
        }

    }

    public function getById($id){
        foreach ($_SESSION[$this->model] as $item) {
            if($item['id'] == $id){
                return $item;
            }
        }
    }

    public function create($item){
        $_SESSION[$this->model][] = $item;
    }

    public function getAll(){

        return $_SESSION[$this->model];
    }

    

    


}


?>