<!-- fichier member_only.php 100%-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acceuil Membre</title>
        <link rel="stylesheet" href="Styles/members_only.css">
    </head>
    <body>
        <?php
            session_start();
        ?>
        <div class="cont">
            <div class="cont-header">
                <h1>Membres uniquement</h1>
            </div>
            <div class="cont-form">
            <?php    
                echo '';

// vérification de la variable de session
                if (isset($_SESSION['valid_user'])) {
            ?>
            
                <form action="librairie/boutique.php" method="post">
                    <p>
                        <?php echo 'Bienvenue ' . $_SESSION['valid_user'] . ', envie de plonger dans la litterature ?'; ?>
                    </p>
                    <input type="submit" value="Voir les livres" class="lien">
                    <?php
                        } else {
                    ?>
                    
                    <p class='para'>
                        Vous n'avez pa eu accès. <br>
                        seuls les membres connectés voient cette page.
                    </p>
                    <?php
                        }
                    ?>
                    
                </form>
                <div class="link">
                        <a href="authmain.php" class = "prin" id = "aj">retour page principale</a>
                </div>
            </div>
            
        </div>
    </body>
</html>