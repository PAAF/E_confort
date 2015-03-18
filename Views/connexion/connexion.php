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
		
		<div class="col-lg-offset-2 col-lg-4 connexionForm">
		<form class="form-login" id="formAdmin" action="?section=connexion" method="post">
						<h4>Connexion Client</h4><br>
						
						<input type="text" name="login" class="form-control input-sm chat-input" placeholder="username">
						<br /><br />
						
						<input type="password" name="pass" class="form-control input-sm chat-input" placeholder="password">
						<br /><br />
						
						<?php
							if (isset($erreur)) echo '<span style="color:red; font-size:1.1em;">'.$erreur.'</span><br><br>';
						?>

						<input class="btn btn-danger" id="boutonConnexion" type="submit" name="connexion" value="Connexion">
						
		</form>
		</br></br></br></br></br></br>
		
		</div>
		<div class="col-lg-4 inscrForm">
		<form class="form-login" id="formAdmin" action="?section=connexion" method="post">	
			<h4>Inscription nouveau Client</h4><br>
						
			<input type="text" name="mail" class="form-control input-sm chat-input" placeholder="email">
			<br /><br /></br>
			<?php
				if (isset($erreurMail)) echo '<span style="color:red; font-size:1.1em;">'.$erreurMail.'</span>';
			?>
			</br></br>
		
			<input class="btn btn-success btnInscr" id="boutonInscription" type="submit" name="inscription" value="Inscription">
		</form>
		</div>
		</center>
		
	  
	  </div>
	  </div>
	  
	</body>
	
	<script src="Vue/bootstrap/js/bootstrap.min.js"></script>
</html>