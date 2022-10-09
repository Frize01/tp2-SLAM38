<?php

namespace routes;

use routes\base\Route;
use controllers\Account;
use controllers\VideoWeb;
use utils\SessionHelpers;
use controllers\ClientController;
use controllers\SampleWebController;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $clientControleur = new ClientController();

        // Route::Add('/', [$main, 'home']);
        Route::Add('/', [$clientControleur, 'liste']);

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

