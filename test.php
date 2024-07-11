<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required />

        <input type="submit" value="Annuler" name="submit"/>
        <input type="submit" value="Enregistrer" name="submit" /><!---->
    <!--</form>
    <?php
    /*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo $_POST['button'];
    */
    ?>
</body>
</html>-->

<?php
// Supprimer tous les cookies existants
foreach ($_COOKIE as $key => $value) {
    setcookie($key, '', time() - 3600); // Définir une date d'expiration dans le passé
}

// Exemple d'ajout d'un nouveau cookie
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 jour
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page PHP</title>
</head>
<body>
    <h1>Page PHP avec gestion de cookies</h1>
    <p>Les cookies ont été supprimés. Vous pouvez maintenant ajouter de nouveaux cookies.</p>
    <?php var_dump($_COOKIE); ?>
</body>
</html>
