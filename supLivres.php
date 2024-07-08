<!--fichier supLivre.php-->

<?php
include("librairie/variables.inc.php");
$db = new mysqli($bdserver, $bdlogin, $bdpwd, $bd);
    if ($db->connect_error) {
        die("Erreur : échec de connexion à la base de données. Essayez plus tard. " . $db->connect_error);
    }
$codeLivre = $_GET['codelivre'];
    $requete = "DELETE FROM livres WHERE codeLivre= . $codeLivre ";
    $resultat = $db->query($requete);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression de livre</title>
</head>
<body>
         <h1>yo</h1>
    
</body>
</html>