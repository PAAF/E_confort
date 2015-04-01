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
        
    $req = $bdd->prepare("SELECT * FROM list_produit WHERE id=?");
    $req->execute(array($id));
    $produit = $req->fetchAll();
    
    return $produit;
}

function get_count_all_produit()
{
	global $bdd;
        
    $req = $bdd->prepare("SELECT count(*) FROM list_produit");
    $req->execute();
    $count = $req->fetchAll();
    
    return $count;
}

function get_produit_pagination($premiereEntree,$derniereEntree)
{
	global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM list_produit ORDER BY nom DESC LIMIT :debut,:nombre');
	$req->bindParam(':debut', $premiereEntree, PDO::PARAM_INT);
	$req->bindParam(':nombre', $derniereEntree, PDO::PARAM_INT);
	$req->execute();
    $produit = $req->fetchAll();
    
    return $produit;
}

?>