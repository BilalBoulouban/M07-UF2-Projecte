<?php


class userController extends Controller{

    public function home(){
        //hola
        echo "Estic a Home!!!!";
    }

    public function store(){
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $user = array(
            "username" => $username,
            "password" => $pass
        );



        $userModel = new User();

        $userModel->create($user);

        echo "estic a create";
    }

    public function list(){

        $userModel = new User();
        $llista = $userModel->getAll();
        foreach ($llista as $u) {
            echo "<pre>";
            print_r($u);
            echo "</pre>";
        }
    }

    public function create(){
        $params['title'] = "Nou Usuari 2";
        $this->render("user/create", $params, "site");
        //include_once(__DIR__ . "../../Views/user/create.view.php");
    }

}

?>