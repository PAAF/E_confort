<?php

if(isset($_COOKIE['mail'])){

include_once('Model/inscription/get_count_user.php');
include_once('Model/inscription/insert_user.php');

// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') 
{
	
	//on récupère dans tout les cas les valeurs post pour pré-remplir les champs ensuite
	$login = addslashes(htmlspecialchars($_POST['login']));
	$nom = addslashes(htmlspecialchars($_POST['nom']));
	$nom2 = addslashes(htmlspecialchars($_POST['nom2']));
	$adr = addslashes(htmlspecialchars($_POST['adr']));
	$ville = addslashes(htmlspecialchars($_POST['ville']));
	$tel = htmlspecialchars($_POST['tel']);
	$code_postal = htmlspecialchars($_POST['code_postal']);
	
	
	
	
	
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))
		&& (isset($_POST['nom']) && !empty($_POST['nom'])) && (isset($_POST['adr']) && !empty($_POST['adr']))
		&& (isset($_POST['mail']) && !empty($_POST['mail'])) && (isset($_POST['ville']) && !empty($_POST['ville'])) && (isset($_POST['code_postal']) && !empty($_POST['code_postal']))) 
	{
	
		//Verification des champs (expression regulière)
		if(!(preg_match("#^[a-zA-Z0-9]{2,}#",$_POST['login']))){
			$erreur = "Login incorrect. (2 caractères minimum)";
		}
		elseif(!(preg_match("#^[a-zA-Z0-9]{8,}#",$_POST['pass']))){
			$erreur = "Mot de passe incorrect. (8 caractères minimum)";
		}
		elseif(!(preg_match("#^[a-zA-Z0-9]{2,}#",$_POST['nom']))){
			$erreur = "Nom incorrect. (2 caractères minimum)";
		}
		elseif(!(preg_match("#^[a-zA-Z0-9]{2,}#",$_POST['nom2']) || strlen($_POST['nom2'])==0)){
			$erreur = "Prenom incorrect. (2 caractères minimum)"; 
		}
		elseif(!(preg_match("#^[0-9]+(\s[A-Za-z])+#",$_POST['adr']))){
			$erreur = "Adresse incorrect.";
		}
		elseif(!(preg_match("#^[a-zA-Z0-9]{2,}#",$_POST['ville']))){
			$erreur = "Ville incorrect. (2 caractères minimum)";
		}
		elseif(!(preg_match("#^[0-9]{5}$#",$_POST['code_postal']))){
			$erreur = "Code Postal incorrect.";
		}
		elseif(!(preg_match("#^[0-9]{10}$#",$_POST['tel']) || strlen($_POST['tel'])==0)){
			$erreur = "Numero de téléphone incorrect.";
		}
		elseif(!(preg_match("#^[a-zA-Z0-9]{1}[a-zA-Z0-9-_]*[@]{1}[a-zA-Z0-9]{1}[a-zA-Z0-9-_]*[\.]{1}[a-zA-Z]{1,}#",$_POST['mail']))){
			$erreur = "Email incorrect.";
		}
		else{
		
			// on teste les deux mots de passe
			if ($_POST['pass'] != $_POST['pass_confirm']) 
			{
				$erreur = 'Les 2 mots de passe sont différents.';
			}
			else 
			{
			
				$login = addslashes(htmlspecialchars($_POST['login']));
				$pass = crypt($_POST['pass'],'$2a$07$'.md5($_POST['pass']).'$');
				$nom = addslashes(htmlspecialchars($_POST['nom']));
				$nom2 = addslashes(htmlspecialchars($_POST['nom2']));
				$adr = addslashes(htmlspecialchars($_POST['adr']));
				$ville = addslashes(htmlspecialchars($_POST['ville']));
				$tel = htmlspecialchars($_POST['tel']);
				$code_postal = htmlspecialchars($_POST['code_postal']);
				$mail = htmlspecialchars($_POST['mail']);
				
			$row = get_count_user($login);

			if ($row[0] == 0) 
			{	
				insert_user($login,$pass,$nom,$nom2,$mail,$tel,$adr,$ville,$code_postal);
				header('Location: ?section=connexion');
				exit();
			}
			else 
			{
				$erreur = 'Un membre possède déjà ce login.';
			}
			}
		
		
		}
	}
	else 
	{
		$erreur = 'Au moins un des champs est vide.';
	}
}


if(!isset($login)){
	$login="";
}
if(!isset($nom)){
	$nom="";
}
if(!isset($nom2)){
	$nom2="";
}
if(!isset($tel)){
	$tel="";
}
if(!isset($adr)){
	$adr="";
}
if(!isset($ville)){
	$ville="";
}
if(!isset($code_postal)){
	$code_postal="";
}

// On affiche la page (Views)
include_once('Views/inscription/inscription.php');

}
else{
	header('Location: ?section=connexion');
	exit();
}

?>