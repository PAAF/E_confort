<?php
function get_count_user($login)
{
    global $bdd;
        
    $req = $bdd->prepare("SELECT count(*) FROM user WHERE login='$login'");
    $req->execute();
    $user = $req->fetchAll();
    
    return $user[0][0];
}
?>