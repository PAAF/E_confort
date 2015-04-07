</br>
<div class="container">
	<div class="row">
		<div class="col-lg-12" >

			<form class="form-horizontal">
				<fieldset>

				<!-- Form Name -->
				<legend>S'enregistrer</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">E-mail</label>  
				  <div class="col-md-5">
				  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="mdp">Mot de Passe</label>
				  <div class="col-md-5">
					<input id="mdp" name="mdp" type="password" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Password input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="cmdp">Confirmation Mot de Passe</label>
				  <div class="col-md-5">
					<input id="cmdp" name="cmdp" type="password" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nom">Nom</label>  
				  <div class="col-md-5">
				  <input id="nom" name="nom" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="prenom">Prénom</label>  
				  <div class="col-md-5">
				  <input id="prenom" name="prenom" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="adresse">Adresse</label>  
				  <div class="col-md-5">
				  <input id="adresse" name="adresse" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="cp">Code Postal</label>  
				  <div class="col-md-5">
				  <input id="cp" name="cp" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="ville">Ville</label>  
				  <div class="col-md-5">
				  <input id="ville" name="ville" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Button (Double) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="button1id"></label>
				  <div class="col-md-8">
					<button id="button1id" name="button1id" class="btn btn-primary col-md-3" style="margin-right:15px;">Valider</button>
					<button id="button2id" name="button2id" class="btn btn-danger col-md-2">Annuler</button>
				  </div>
				</div>

				</fieldset>
			</form>
			
			<hr>
			<?php include('footer.php'); ?>

		</div>
	</div>
</div>