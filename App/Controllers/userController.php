<?php


class userController extends Controller{

    public function home(){
        //hola
        echo "Estic a Home!!!!";
    }

    public function store(){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $user = array(
            "naem" => $name,
            "username" => $username,
            "password" => $pass
        );



        $userModel = new User();

        $userModel->create($user);
        $params = null;

    

$this -> list();

   }

    public function list(){
        require_once(__DIR__."../../Views/templates/navbar.php");
        $userModel = new User();
        $llista = $userModel->getAll();
        foreach ($llista as $u) {
            echo "<pre>";
            print_r($u);
            echo "</pre>";
        }
       

        // $params['title'] = "Llista usuaris";
        // $this->render("user/list", $params, "site"); 
    }

    public function create(){
        $params['title'] = "Nou Usuari 2";
        $this->render("user/create", $params, "site");
        //include_once(__DIR__ . "../../Views/user/create.view.php");
    }
            //check user
    public function checkuser(){
        include_once (__DIR__."../Models/User.model.php");

      //$username = $_POST['username'];
      //  $pass = $_POST['pass'];
        $userModel = new User();
        $user = $userModel->getById($id_user);
        if($user){
            $_SESSION['id_user'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: /user/list");
        }else{
            header("Location: /user/create");
        }
        //function para ir a user para recorrer ya que tengo hai la informacion
    
     
    }
       //funcio per canviar la contrasenya
       public function changePass(){
        $params['title'] = "Canviar contrasenya";
        $this->render("user/changePass", $params, "site");

    }

    // $result = $userModel[
    //     "username" => $username,
    //     "password" => $pass
    // ]

?>