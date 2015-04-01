<?php

include_once('Model/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'connexion')
{
    include_once('Controler/connexion/connexion.php');
}

if(isset($_GET['section']) AND $_GET['section'] == 'inscription')
{
	include_once('Controler/inscription/inscription.php');
}

if(isset($_GET['section']) AND $_GET['section'] == 'magasin')
{
	include_once('Controler/magasin/magasin.php');
}

if(isset($_GET['section']) AND $_GET['section'] == 'detailProduit')
{
	include_once('Controler/magasin/detailProduit.php');
}

if(isset($_GET['section']) AND $_GET['section'] == 'achat')
{
	include_once('Controler/magasin/achat.php');
}