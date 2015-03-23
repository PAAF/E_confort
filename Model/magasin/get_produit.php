<?php
function get_all_produit()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM list_produit');
    $req->execute();
    $produit = $req->fetchAll();
    
    return $produit;
}


function get_produit_by_id($id)
{
    global $bdd;
        
    $req = $bdd->prepare("SELECT * FROM list_produit WHERE id='$id'");
    $req->execute();
    $produit = $req->fetchAll();
    
    return $produit;
}

?>