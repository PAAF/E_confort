<?php

include_once('Model/magasin/get_produit.php');


$produit = get_all_produit();


// On affiche la page (Views)
include_once('Views/magasin/magasin.php');

?>