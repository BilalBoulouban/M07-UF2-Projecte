<?php

include_once ("Orm.php");

class User extends Orm{

    public function __construct()
    {
        parent::__construct('users');
        if(!isset($_SESSION['id_user'])){
            $_SESSION['id_user']=1;
        }
        //crear aqui el administrador amb una array
        $admin = [
            'id' => $_SESSION['id_user'] ++,
            'name' => 'admin',
            'password' => 'admin',
            'admin' => true,

        ];

    }

}



?>