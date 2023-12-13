<?php

class Orm
{

    protected $model;

    public function __construct($model)
    {

        $this->model = $model;
        if (!isset($_SESSION[$model])) {
            $_SESSION[$model] = [];
        }
    }

    public function getById($id)
    {
        foreach ($_SESSION[$this->model] as $item) {
            if  ($item['id'] == $id)  {
                return $item;
            }
        }
    }
    //hem de fer cuan arribi aqu ha de tenir el id possat
    public function create($item)
    {
        $item['id'] = $_SESSION[$this->model];
        $_SESSION[$this->model][] = $item;
    }

    public function getAll()
    {

        return $_SESSION[$this->model];
    }

    //tots els mertodes CRUD van aqui; guardar usuaris, afeguir,llista, eliminar


    public function reset()
    {
        unset($_SESSION[$this->model]);
    }


    public function removeItemById($id)
    {
        foreach ($_SESSION[$this->model] as $key => $item) {
            if ($item['id'] == $id) {
                unset($_SESSION[$this->model][$key]);
                return $item;
            }
        }
        return null;
    }
    public function updateItemById($newItem)
    {
        foreach ($_SESSION[$this->model] as $key => $item) {
            if ($item['id'] == $newItem['id']) {
                $_SESSION[$this->model][$key] = $newItem;
                return $newItem;
            }
        }
        return null;
    }
    
}