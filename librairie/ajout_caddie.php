<?php
    include("variables.inc.php");
    $db = new mysqli($bdserver, $bdlogin, $bdpwd, $bd);
    if ($db->connect_error) {
        die("Connexion échouée : " . $db->connect_error);
    }

    /*$sql = "UPDATE $livres SET stock = stock-1 WHERE codeLivre = '$id'";
    $resultat = $db->query($sql);
    $produit = $resultat->fetch_assoc();
    $stmt = $db->prepare($sql);
    $stmt->execute();        
    $stmt->close();*/
        

    
    if(isset($_POST['id'])) {
        $idLivre = $_POST['id'];
        if(isset($_COOKIE['monpanier'])) {
            $monpanier = $_COOKIE['monpanier'] . "," . $idLivre;
        }
        else {
            $monpanier = $idLivre;
        }
        setcookie('monpanier', $monpanier, time() + (86400 * 30), "/");
        header("Location: $url/boutique.php?id=".$_REQUEST['id']);
        exit();
        
    }
    else {
        header("Location: $url/boutique.php?id=".$_REQUEST['id']);
        
    }

?>
