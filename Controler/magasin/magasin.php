<?php

include_once('Model/magasin/get_produit.php');

$produit = get_all_produit();
$nbProduit = get_count_all_produit();
							

if($nbProduit[0][0]>0){ 
									
	$messagesParPage=5; //Nous allons afficher 5 messages par page.

								 
	//Nous allons maintenant compter le nombre de pages.
	$nombreDePages=ceil($nbProduit[0][0]/$messagesParPage);
								 
	if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
	{
		$pageActuelle=intval($_GET['page']);
								 
		if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
		{
			$pageActuelle=$nombreDePages;
		}
	}
	else // Sinon
	{
		$pageActuelle=1; // La page actuelle est la n°1    
	}
								 
	$premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire
								 
	$produitPage = get_produit_pagination($premiereEntree,$messagesParPage);

				 
	if($pageActuelle==1){
		$foot1 = '<br><br><center><div class="col-md-12"><ul class="pagination"><li><a href="?section=magasin&page='.$pageActuelle.'">&laquo;</a></li>';
	}
	else{
		$foot1 = '<br><br><center><div class="col-md-12"><ul class="pagination"><li><a href="?section=magasin&page='.($pageActuelle-1).'">&laquo;</a>';
	}
	

				for($i=1; $i<=$nombreDePages; $i++)
				{
					 if($i==$pageActuelle) //Si il s'agit de la page actuelle...
					 {
						 $foot[$i] = ' <li class="active"><a href="?section=magasin&page='.$i.'">'.$i.'</a></li>';
					 }	
					 else //Sinon...
					 {
						 $foot[$i] = ' <li><a href="?section=magasin&page='.$i.'">'.$i.'</a></li>';
					 }
				}
				
				
	if($pageActuelle==$nombreDePages){
		$foot2 = ' <li><a href="?section=magasin&page='.$pageActuelle.'">&raquo;</a></li></ul></div></center>';
	}
	else{
		$foot2 = ' <li><a href="?section=magasin&page='.($pageActuelle+1).'">&raquo;</a></li></ul></div></center>';
	}
				
}


// On affiche la page (Views)
include_once('Views/magasin/magasin.php');

?>