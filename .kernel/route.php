<?php
use Kernel\Url\Router as r;
use Controller as c;
use Api as a;


// Route vers les composants.
r::notfound('/accueil');
r::default('/accueil');
r::add('/accueil', c\Accueil::class);
r::add('/projet', c\Projet::class);
r::add('/lunch/{id}', c\Lunch::class);
r::add('/login', c\Login::class);
r::add('/ajouter', c\Ajouter::class);



/*
// Route vers les API.
r::add('/api', a\::class, [
    r::METHOD_GET,
    r::METHOD_POST
]);
r::add('/api/{id}', a\::class, [
    r::METHOD_GET,
    r::METHOD_PUT,
    r::METHOD_DELETE,
    r::METHOD_PATCH
]);
*/


?>