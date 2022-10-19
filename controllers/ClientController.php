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

    function liste($page, $search=""): string
    {
        if($page == ""){$page = 0;}

        $clients = $this->clientModele->recherche($search, 10, $page);
        return Template::render(
            "views\client\liste.php",
            array("page" => $page, "clients" => $clients, "search"=> $search)
        );
    }

    function client($id = 0): string
    {

        $clients = $this->clientModele->getByClientId($id);
        return Template::render(
            "views\client\clientfiche.php",
            array("clients" => $clients)
        );
    }



}