<!-- enreg_cde.php -->

<?php
    include("variables.inc.php");
    session_start();

    $db = new mysqli($bdserver, $bdlogin, $bdpwd, $bd);
    if ($db->connect_error) {
        die("Connexion échouée : " . $db->connect_error);
    }

    $montant = 0;
    //$listeproduits = "";
    $date = date("Y-m-d G:i:s");
    /*$_COOKIE['monpanier'][0];
    $tab_livre = explode(",", $_COOKIE['monpanier']);
    $i = 0;

    while($id = $tab_livre[$i]){
        $sql = "SELECT * FROM $livres WHERE codeLivre = '$id'";
        $resultat = $db->query($sql);
        $livre = $resultat->fetch_assoc();
        $montant += $livre['pu'];
        $listeproduits .= ','.$livre['REF'];
        $i++;
    }*/

    $listeproduits = $_POST['listesproduits'];
    $pops = $_POST['montant'];
    //$pop = $listeproduits[0].$listeproduits[1].$listeproduits[2];
    $pop = '';
    /*foreach($listeproduits as $l){
        $pop = $pop . $l;
    }*/
    $i = 0;
    while($i < count($listeproduits)){
        $pop .= $listeproduits[$i];
        $i++;
    }
    
    $montant += 1000;
    $date = date("Y-m-d G:i:s");
    $sql = "INSERT INTO $cdes (produits, montantcde, nomPrenomCli, adressecli, dateCde) VALUES ('$pop','$pops','".$_SESSION['valid_user']."','".$_REQUEST['adresse']."','$date')";
    $db->query($sql);

    setcookie("monprofil","nom = ".$_REQUEST['nom'].";;adresse = ".$_REQUEST['adresse'], time() + 604800);

    setcookie("monpanier","",time()-3600);
    $db->close();
    setcookie("monpanier","",time()-3600);
    $db->close();

    echo $pop;
    //echo '<meta http-equiv="refresh" content="3;url=boutique.php">';
    /*sleep(5);
    header("Location: $url/boutique.php");

    echo '<pre>';
    print_r($listeproduits);
    echo '</pre>';

    echo "commande effectue";*/
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    yo
</body>
</html>