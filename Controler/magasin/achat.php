<?php

include_once('Model/magasin/get_produit.php');

$produit = get_produit_by_id($_GET['id']);

$qte = $_POST['qte'];
$id = $_GET['id'];
$nom = $produit[0]['nom'];
$prix = $qte*$produit[0]['prix'];



// On affiche la page (Views)
include_once('Views/magasin/achat.php');

?>