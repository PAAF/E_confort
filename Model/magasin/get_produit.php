<?php
function get_all_produit()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM list_produit');
    $req->execute();
    $produit = $req->fetchAll();
    
    return $produit;
}
?>