<?php

namespace routes;

use utils\Template;
use routes\base\Route;
use utils\SessionHelpers;
use controllers\ClientController;
use controllers\SampleWebController;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $ClientController = new ClientController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);
        Route::Add('/exemple', [$main, 'exemple']);
        Route::Add('/exemple2/{parametre}', [$main, 'exemple']);

        Route::Add('/listeClient', [$ClientController, 'listeClient']);
        Route::Add('/ficheClient/{id}', [$ClientController, 'ficheClient']);
        Route::Add('/ajouterProduit/{clientId},{produitId}', [$ClientController, 'newProduit']);



        Route::Add('/about', function () {
            return Template::render('views/global/about.php');
        });


    }
}

