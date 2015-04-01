<?php

include_once('Model/magasin/get_produit.php');


$produit = get_produit_by_id($_GET['id']);


// On affiche la page (Views)
include_once('Views/magasin/detailProduit.php');

?>