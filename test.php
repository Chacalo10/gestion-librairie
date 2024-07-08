<!DOCTYPE html>
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
    </form>
    <?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo $_POST['button'];
    ?>
</body>
</html>