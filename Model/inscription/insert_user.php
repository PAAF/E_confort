<?php
function insert_user($login,$pass,$nom,$nom2,$mail,$tel,$adr,$ville,$code_postal)
{
    global $bdd;
        
    $req = $bdd->prepare("INSERT INTO user(login,mdp,nom,prenom,mail,tel,rue,ville,codeP) VALUES ('$login','$pass','$nom','$nom2','$mail','$tel','$adr','$ville','$code_postal')");
    $req->execute();

}
?>