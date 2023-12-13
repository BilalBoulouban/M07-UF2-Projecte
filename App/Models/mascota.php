//Model per a la gestio de dades de les cites
<?php

include_once ("Orm.php");

class mascota extends Orm{

    public function __construct()
    {
        parent::__construct('mascota');
        if(!isset($_SESSION['id_mascota'])){
            $_SESSION['id_mascota'] = 1;
        }
    }

 
}


?>