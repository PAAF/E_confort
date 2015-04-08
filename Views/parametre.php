<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="author" content="souloup" />
	<link media="screen" rel="stylesheet" href="./stylePAGE.css" />

</head>

<body>


<header>



</header>




<article class="basique">

	<div id="div_texte1" style="display:block;">
	
	<table>
	<caption> Etat des prises :</caption>
   <tr>
       <th>Liste des prises</th>
       <th>Etat</th>
       
   </tr>
   <tr>
       <td align="center">Prise 1</td>
       <td align="center">Marche</td>
       
   </tr>
    <tr>
       <td align="center">Prise 2</td>
       <td align="center">Arrêt</td>
       
   </tr>
    <tr>
       <td align="center">Prise 3</td>
       <td align="center">Arrêt</td>
       
   </tr>
</table>
	<br><br>
	

<FORM NAME="frm" ACTION="seuil.php" METHOD="post">

Définir un seuil : <INPUT TYPE="text" NAME="zs_quant1"> Kw / jour <INPUT TYPE="submit" VALUE="OK">

</FORM>

<FORM NAME="frm" ACTION="supprimer_seuil.php" METHOD="post">

<BR><BR>

Le seuil actuel est de 50 Kw / jour

<INPUT TYPE="submit" VALUE="Supprimer ce seuil">

</FORM>

<br><br>

<FORM NAME="frm" ACTION="supprimer_seuil.php" METHOD="post">

Alerte :

<INPUT type= "radio" name="alerte" value="oui"> OUI
<INPUT type= "radio" name="alerte" value="non"> NON

<INPUT TYPE="submit" VALUE="Valider">

</FORM>

	</div>
</article>

<article class="automatique">
	
	<div id="div_texte2" style="display:none;">
	
		Veuillez vous abonner pour profiter de ce mode ! 

		
	</div>


</article>

<div class="lien">
	
	
<!-- Appelle la fonction Javascript qui permet d'afficher soit la présentation soit les règles d'archivages -->


		<a class="basiquelien" href="javascript:visibilite('div_texte1');"> Basique</a>
		<a class="automatiquelien" href="javascript:visibilite('div_texte2');">Automatique</a>
		

</div>



<!-- fonction Javascript qui afiche ou cache la présentation ou les Règles d'archivages -->


<script type="text/javascript" >
	    var divPrecedent=document.getElementById('div_texte1');
	    function visibilite(divId)
	    {
	        divPrecedent.style.display='none';
	        divPrecedent=document.getElementById(divId);
	        divPrecedent.style.display='';
	    }
	</script>


	
<!-- fonction -->


	<script type="text/javascript" >
	
	function hasClass(element, className) {
    return element.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className);
}
	
	// fonction Javascript qui créer ou supprime le contenu d'un class en focntion de l'ID de chaque groupe de mots-clés
	
	
 function cache(id)
{
    element = document.getElementById('div_'+id);
   if (hasClass(element, 'hideChild'))
   {
      element.className = "";
   }
   else
   {
      element.className = "hideChild";
   }
}

// test la présence d'une classe et si la classe contient notre nom de classe on récupére true


function hasClass(element, className) {
    return element.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className);
}
 </script> 
 


	
</body>