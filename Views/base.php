<!doctype html>
<html lang="fr">

<body>
    <?php
        include('header.php');
        include('menu.php');
    ?>
	<div id="wrapper">
		<?php
			$arrayPage = array(
			'acceuil',
			'consultation',
			'reception',
			'recup_donnees',
			'annuler_validation',
			'syncronisation',
			'error',
			'recapitulatif',
			'treatmulti',
			'update',
			'detail',
			'gestion',
			'login',
			'traitementGestion',
			'logout',
			'statistiques',
			'menu_modif_allee',
			'modif_allee_produit',
			'modif_allee_labo',
			'modif_allee_labo_produit',
			'modif_allee_stock',
			'enr_modif_allee',
			'enr_modif_stock',
			'confirmation_update',
			'confirmation_non_dispo');

		   /* if(isset($_SESSION['idEmployee'])) {
				if( isset($_GET['p']) && in_array($_GET['p'], $arrayPage, true)) {
					include($_GET['p'].'.php');
				} elseif(!isset($_GET['p'])) {
					include('acceuil.php');
				} else {
					include('error.php');
				}
			}
			else {
				include('login.php');
			}*/

			echo '<div id="push"></div>';
		?>
	</div>
	
	<header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Business Name or Tagline</h1>
                </div>
            </div>
        </div>
    </header>
	
	<div class="container">
	
		<hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores.</p>
                <p>
                    <a class="btn btn-default btn-lg" href="#">Call to Action &raquo;</a>
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>Start Bootstrap</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>(123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">name@example.com</a>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #1</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #2</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Marketing Box #3</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>
		
		<?php include('footer.php'); ?>
	</div
</body>
</html>