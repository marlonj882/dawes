<?php
namespace App\Controllers;

// Definimos la clase que extiende de base controller
class IndexController extends BaseController{
    public function IndexAction()
    {
        $data = array('message' => 'Hola Mundo');
        $this->renderHTML('../app/views/index_view.php', $data);
    }

    public function SaludarAction($request): void{
        $nombre = explode("/", $request);
        $nombre = end($nombre);
        $data = array('message'=>$nombre);
        $this->renderHTML('../app/view/saludo_view.php',$data);
    }

}

?>