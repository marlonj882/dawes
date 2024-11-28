<?php
namespace App\Controllers;
require_once "BaseController.php";


class NumerosController extends BaseController
{
    public function ParesAction()
    {
        $numerosPares = array();
        for ($i = 0; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                $numerosPares[] = $i;
            }
        }

        $data = array('numerosPares' => $numerosPares);
        $this->renderHTML('../app/view/pares_view.php', $data);
    }
}

?>