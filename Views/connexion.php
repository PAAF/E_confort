<div class="container">
	<div class="row">
	  <div class="col-lg-12" >
		<br/>
		<center>
		<legend style="text-align:left;">Se Connecter</legend>
		<div class="col-lg-offset-2 col-lg-4 connexionForm">
		<form class="form-login" id="formAdmin" action="?section=connexion" method="post">
						<h4>Connexion Client</h4><br>
						
						<input type="text" name="login" class="form-control input-md chat-input" placeholder="E-mail">
						<br />
						
						<input type="password" name="pass" class="form-control input-md chat-input" placeholder="Mot de Passe">
						<br />
						
						<?php
							if (isset($erreur)) echo '<span style="color:red; font-size:1.1em;">'.$erreur.'</span><br><br>';
						?>

						<input class="btn btn-primary" id="boutonConnexion" type="submit" name="connexion" value="Connexion">
						
						<br />
						<a href="#" id="pwdmail">Mot de passe oublié?</a>
						
		</form>
		<br />
		
		</div>
		<div class="col-lg-4 inscrForm">
		<form class="form-login" id="formAdmin" action="index.php?p=inscription" method="post">	
			<h4>Inscription nouveau Client</h4><br>
						
			<input type="text" name="mail" class="form-control input-md chat-input" placeholder="E-mail">
			<br />
			<?php
				if (isset($erreurMail)) echo '<span style="color:red; font-size:1.1em;">'.$erreurMail.'</span>';
			?>
			</br></br></br>
		
			<input class="btn btn-success btnInscr" id="boutonInscription" type="submit" name="inscription" value="Inscription">
		</form>
		</div>
		</center>
	  
	  </div>
	</div>
	
	<hr>
	<?php include('footer.php'); ?>
</div>