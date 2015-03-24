<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    
	
	<?php include_once('Views/header.php'); ?>
        
    <body>

		<div class="row">
		<br><br><br><br><br><br>
			  <div class="col-lg-offset-3 col-lg-6" >

				<div class="table-responsive">
					<table class="table table-hover table-bordered" >
						<thead>
							<tr>
								<th class="titreCol" data-field="name">Nom</th>
								<th class="titreCol" data-field="price">Prix</th>
								<th class="titreCol" data-field="image">Photo <?php echo $produitPage[0]['nom']; ?></th>
							</tr>
							<tbody>
							<?php 
							
							foreach($produitPage as $p){
							?>
							<tr>
							<td><br><br><br><?php echo nl2br($p['nom']); ?></td>
							<td><br><br><br><?php echo nl2br($p['prix'])."€"; ?></td>
							<td><center><a href="<?php echo "?section=detailProduit&id=".$p['id']?>"> <img  src="<?php echo "images/".nl2br($p['id']).".jpg"; ?>"></img></a></center></td>
							</tr>
							<?php
							}

							?>
							</tbody>
							
						</thead>
					</table>
				</div>
			<?php 
				echo $foot1;
				
				foreach($foot as $f){
					echo $f;
				}
			
				echo $foot2; 
				
			?>
			  </div>
		</div>
	  
	</body>
	
	<script src="Vue/bootstrap/js/bootstrap.min.js"></script>
</html>