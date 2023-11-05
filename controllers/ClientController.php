<?php
namespace controllers;

use utils\Template;
use models\ClientsModele;
use controllers\base\WebController;

class ClientController extends WebController
{
    private $clientModele;
    private $produitModele;
    private $adresseModele;
    // function listeClient(): string
    // {
    //     return Template::render("views/global/home.php", array("date" => date("d-m-Y à H:i")));
    // }

    function __construct()
    {
        $this->clientModele = new \models\ClientsModele();
        $this->produitModele = new \models\ProduitsModele();
        $this->adresseModele = new \models\AdresseModel();

        
    }
    function client($id)
    {
        echo "Voici le client avec l'identifiant $id";
    }



    function listeClient()
    {
        $clients = $this->clientModele->liste(25, 0);
        return Template::render("views/listeClient.php", array("clients" => $clients));
    }

    function ficheClient($id)
    {   
        $clients = $this->clientModele->getByClientId($id);
        $produits = $this->produitModele->lesProduitsClient($id);
        $adresses = $this->adresseModele->lesAdressesClient($id);
    
        return Template::render("views/ficheClient.php", array("clients" => $clients,"adresses"=> $adresses, "produits"=> $produits));

    }

    function ajouterProduit($clientId,$produitId)
    {   
       
        $produits = $this->produitModele->creerProduit($clientId,$produitId);
   
    
        return Template::render("views/newProduit.php", array("produits"=> $produits));

    }
 

    

    
}