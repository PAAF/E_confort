<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Livraison des prises</title>
	<link href='../contents/bootstrap.min.css' rel="stylesheet">
	<link href='../contents/style.css' rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="../scripts/website.js"></script>
</head>
<body>
<section id="mail">
	<div id="dialog_mail_support" title="Envoie de mail">
		<p>Envoyer un mail au support</p>
	  	<form>
	    	<fieldset>
	    		<div class="form-group">
	    			<label for="objet">Objet:</label>
	    			<input type="text" name="objet" id="objet">
	    		</div>
	    		<div class="form-group">
	    			<label for="message">Message:</label>
	    			<textarea name="message" id="message"></textarea>
	    		</div>
	    	</fieldset>
	  	</form>
	</div>
	<div id="result"></div>
	<a href="#" id="supportmail">Envoyer un mail au support</a>
</section>
<section id="abonne">
	<div>
		<?php
		$abonne= true;
		if($abonne)
		{
			echo "Vous êtes abonné.";
		}
		else
		{
			echo "Vous n'êtes pas abonné.";
		}
		?>
	</div>
</section>
<section id="constructeur">
	<div>
	<?php 
		$nomConstructeur = "E_Confort Constructeur";
		$rueConstructeur = "2 rue des Lilas";
		$villeConstructeur = "31100 Toulouse";
		$telConstructeur = "05 66 66 66 66";
	?>
		<h3>Coordonnée du constructeur</h3>
		<p>
			<?php
				echo $nomConstructeur . "<br/>" . $rueConstructeur . "<br/>" . $villeConstructeur . "<br/>" . $telConstructeur;
			?>
		</p>
	</div>
</section>
</body>
</html>