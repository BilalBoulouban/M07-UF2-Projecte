//visualitzacio, reserva, edicio, eliminacio de cites
//metode store per el admin
<?php

class mascotaController extends Controller
{

    public function index()
    {
        //hola
        $params = null;
        $this->render("mascota/", $params, "main");
    }
    public function store()
    {
        //veure la informacio del var_dump
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        die();
        //rebo dades del modul y creo el modol
        $nom_mascota = $_POST['nom_mascota'];
        $nom_client = $_POST['nom_client'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $tipus = $_POST['tipus'];
        $motiu = $_POST['motiu'];
        $infoMascota = array(
            //serveix per anar ficant id incrementals
            "id" => $_SESSION['id_mascota']++,
            "nom_mascota" => $nom_mascota,
            "nom_client" => $nom_client,
            "data" => $data,
            "hora" => $hora,
            "tipus" => $tipus,
            "motiu" => $motiu

        );
        $this->render("appontmentController/", null, "main");
        $mascotaModel = new mascota();

        $mascotaModel->create($infoMascota);
        $params['llista'] = $mascotaModel->getAll();
        $params["title"] = "gestio Animals";
        $this->render("mascota/index", $params, "main");
    }
    public function create()
    {
        $params['title'] = "Crear Mascota";
        $this->render("mascota/create", $params, "main");
    }
}
// public function destroy){
//     $mpModel = new Mp);
//     $mpModel->removeItemById($_GET ['id ']);
//     header ("Location: /mp/index");
// }

// public function update(){
//     $mpModel = new Mp();
//     $mp = $mpModel->getById($_GET['id']);
//     $params['mascota'] = $mp;
//     $params['title'] = "Editar Mascota";
//     $this->render("mp/update", $params, "main");
// }


?>