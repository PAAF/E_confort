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
			'');

		 	//if(isset($_SESSION['idEmployee'])) {
				if( isset($_GET['p']) && in_array($_GET['p'], $arrayPage, true)) {
					include($_GET['p'].'.php');
				} elseif(!isset($_GET['p'])) {
					include('acceuil.php');
				} else {
					include('error.php');
				}
			/*}
			else {
				include('login.php');
			}*/

			echo '<div id="push"></div>';
		?>
	</div>
</body>
</html>