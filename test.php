<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo "yo";
    echo "<pre>";
    print_r ($_SESSION);
    echo "</pre>";
    echo "ya<br>";

    $cra = 'to,to';
    echo $cra[2];
    ?>
</body>
</html>
    


<!--Supprimer tous les cookies existants
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

</body>
</html>-->


