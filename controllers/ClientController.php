<?php
namespace controllers;

use utils\Template;
use models\ClientsModele;
use controllers\base\WebController;

class ClientController extends WebController
{
    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    function liste($page = 0): string
    {
        if($page<0){$page=0;}
        $clients = $this->clientModele->liste(10, $page);
        return Template::render(
            "views\liste\clients.php",
            array("page" => $page, "clients" => $clients)
        );
    }
}