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
<?php include('footer.php'); ?>
</body>
</html>