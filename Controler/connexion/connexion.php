<?php

include_once('Model/connexion/get_user.php');

if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') 
{
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) 
	{
	
	$pass = crypt($_POST['pass'],'$2a$07$'.md5($_POST['pass']).'$');
	
		$row = get_nb_user($_POST['login'],$pass);
		if($row==1){
			session_start();
			$_SESSION['login'] = $_POST['login'];
			header('Location: ?section=profil');
			exit();
		}
		else{
			$erreur="Compte non reconnu.";
		}
	
	}
	else{
		$erreur = "Au moins un des champs est vide.";
	}
}


if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') 
{
	if (isset($_POST['mail']) && !empty($_POST['mail'])) 
		{
			$row = get_nb_user_mail($_POST['mail']);
			if($row==0){
				if(!(preg_match("#^[a-zA-Z0-9]{1}[a-zA-Z0-9-_]*[@]{1}[a-zA-Z0-9]{1}[a-zA-Z0-9-_]*[\.]{1}[a-zA-Z]{1,}#",$_POST['mail']))){
					$erreurMail = "Email incorrect.";
				}
				else{
					$temps = 365*24*5500;
					setcookie ("mail", $_POST['mail'], time() + $temps);
					header('Location: ?section=inscription');
					exit();
				}
			}
			else{
				$erreurMail = "Email déjà utilisé.";
			}
		}
		else{
			$erreurMail = "Veuillez renseigner un Email.";
		}
	

}


// On affiche la page (Views)
include_once('Views/connexion/connexion.php');

?>