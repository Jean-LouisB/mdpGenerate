<?php


if(isset($_POST['userPass'])){
    $userPass = $_POST['userPass'];
    $hachPass = password_hash($userPass, PASSWORD_BCRYPT);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Génération de mots de passe cryptés</title>
</head>
<body>
<section>
    <form action="#" method="post">
        <div>
            <label for="userPass">Créer un mot de passe crypté:</label>
            <input type="password" placeholder="Mot de passe" id="userPass" name="userPass" required>
            <button type="submit">VALIDER</button>
        </div>

                <?php
                    if(isset($hachPass)){
                        echo "<div><p>".$userPass." : </p><p>".$hachPass."</p></div>";
                    }
                ?>

    </form>
</section>
</body>
</html>
