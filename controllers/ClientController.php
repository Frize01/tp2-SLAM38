<?php
namespace controllers;

use utils\Template;
use models\ClientsModele;
use models\ProduitsModele;
use controllers\base\WebController;

class ClientController extends WebController
{
    function __construct()
    {
        $this->clientModele = new ClientsModele();
        $this->produitModel = new ProduitsModele();
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
        $produit = $this->produitModel->getAll();
        return Template::render(
            "views\client\clientfiche.php",
            array("clients" => $clients, "produits" => $produit)
        );
    }

    function ajoutProd($idClient, $selectProd){
        if($selectProd!=0){
            $this->produitModel->affecterProduit($selectProd, $idClient);
        }
        else{
            session_start();
            $_SESSION["erreur"] = "Aucun produit n'est séléctionné";
            
        }
        header('Location: /client/'.$idClient);
    }



}