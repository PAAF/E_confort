<?php
function get_user()
{
    global $bdd;
        
    $req = $bdd->prepare('SELECT * FROM user');
    $req->execute();
    $user = $req->fetchAll();
    
    return $user;
}


function get_nb_user($login,$mdp)
{
    global $bdd;
        
    $req = $bdd->prepare("SELECT count(*) FROM user WHERE login='$login' AND mdp='$mdp'");
    $req->execute();
    $user = $req->fetchAll();
    
    return $user[0][0];
}


function get_nb_user_mail($mail)
{
    global $bdd;
        
    $req = $bdd->prepare("SELECT count(*) FROM user WHERE mail='$mail'");
    $req->execute();
    $user = $req->fetchAll();
    
    return $user[0][0];
}

?>