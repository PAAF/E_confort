<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>E-Confort</title>
		<meta charset="utf-8">
        <link href="vue/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
        
    <body>

<div class="row">
	  <div class="col-lg-12" >

		<br><br><br><br><br><br><br>
		<center>


<div class="col-lg-offset-3 col-lg-6">
		<form class="form-login" id="formAdmin" action="?section=inscription" method="post">
						<h3>Enregistrement d'un nouveau Client</h3><br>
						<?php
							if (isset($erreur)) echo '<span style="color:red; font-size:1.1em;">'.$erreur.'</span><br><br>';
						?>
						<br>
						
						Login* : <input value="<?php echo $login; ?>" class="form-control input-sm chat-input" type="text" name="login" size="20" maxlength="30">
						<br>
						
						Mot de passe* : <input class="form-control input-sm chat-input" type="password" name="pass" size="20" maxlength="30">
						<br>
						
						Confirmation du mot de passe* : <input  class="form-control input-sm chat-input" type="password" name="pass_confirm" size="20" maxlength="30">
						<br>
						
						Nom* : <input value="<?php echo $nom; ?>" class="form-control input-sm chat-input" type="text" name="nom" size="20" maxlength="30">
						<br>
						
						Prenom : <input value="<?php echo $nom2; ?>" class="form-control input-sm chat-input" type="text" name="nom2" size="20" maxlength="30">
						<br>
						
						Adresse* : <input value="<?php echo $adr; ?>" class="form-control input-sm chat-input" type="text" name="adr" size="20" maxlength="30">
						<br>
						
						Ville* : <input value="<?php echo $ville; ?>" class="form-control input-sm chat-input" type="text" name="ville" size="20" maxlength="30">
						<br>
						
						Code postal* : <input value="<?php echo $code_postal; ?>" class="form-control input-sm chat-input" type="text" name="code_postal" size="20" maxlength="20">
						<br>
						
						Tel : <input value="<?php echo $tel; ?>" class="form-control input-sm chat-input" type="text" name="tel" size="20" maxlength="30">
						<br>
						
						Email* : <input class="form-control input-sm chat-input" value="<?php echo $_COOKIE['mail'];?>" type="text" name="mail" size="20" maxlength="80" readonly="true">
						<br>
						
						<br>
						<input class="btn-lg btn-danger" type="submit" name="inscription" value="Inscription">
						</form>
						<br>
						* : Champs obligatoire.
						
						</br></br></br></br></br></br></br></br></br></br>
		
		</div>
		
		
		
</center>
		
	  
	  </div>
	  </div>
	  
	</body>
	
	<script src="Vue/bootstrap/js/bootstrap.min.js"></script>
</html>