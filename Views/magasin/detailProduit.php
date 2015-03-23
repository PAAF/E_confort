<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    
	
	<?php include_once('Views/header.php'); ?>
	
	
        
    <body>
		
	
	<br><br><br><br><br><br><br><br><br><br><br><br>
		
	  <div class="col-lg-offset-1 col-lg-10" >
	  
	  <div class="col-lg-2 detailProdStyle" >
	  <div class="col-lg-12 titredetailProd" ><?php echo $produit[0]['nom'] ?></div>
	  <div class="col-lg-12 detailProdDescr" ><img src="<?php echo "images/".$produit[0]['id'].".jpg"?>" ></img></div>
	  
	  
	  </div>
	  
	  <div class="col-lg-6 detailProdStyle" >
	  <div class="col-lg-12 titredescrProd" >Description</div>
	  <div class="col-lg-12 detailProdDescr" ><?php echo nl2br($produit[0]['descr']) ?></div>
	  
	  
	  </div>
	  
	  
	  <div class="col-lg-4 detailProdStyle"  >
	  <form method="post" action="<?php echo "commande.php?id=".$produit[0]['id'] ?>">
	  
	  
	  <div class="col-lg-12 titredetailProd" style="min-height:40vh;">
	  <center>
	  <span class="stylePrix"><?php echo nl2br(sprintf('%.2f',$produit[0]['prix']))." €"; ?></span><br><br>
	  
	  <span class="txt2" >Choisir Quantité : </span><select name="list" id="list">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		</select>
	  <br><br>
		</center>
		
	  <div class="col-lg-12 detailProdDescr"><input id="cmd" name="cmd" type="submit" value="Commmander" class="btn btn-block btn-lg btn-success"></div>
	  
	  </form>
	  </div>
	  
	  
	  </div>
	  </div>
	  
	</body>
	
	<script src="Vue/bootstrap/js/bootstrap.min.js"></script>
</html>