<?php

include_once ("Orm.php");

class User extends Orm{

    public function __construct()
    {
        parent::__construct('users');
        if(!isset($_SESSION['id_user'])){
            $_SESSION['id_user']=1;
        }
    }

    
}



?>