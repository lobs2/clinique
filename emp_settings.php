<?php
define('COOKIE_NAME', 'nom_du_cookie');
define('COLOR_COOKIE', 'background_color');
/* Pour lire le cookie
array_key_exists(COOKIE_NAME, $_COOKIE)
puis $_COOKIE[COOKIE_NAME]
pour �crire : setcookie(COOKIE_NAME, 'valeur cookie', time() + 3600 * 24 * 30);
Place un cookie dans la r�ponse pour une dir�e de 30 jours (exprim� en secondes)*/
//setcookie(COOKIE_NAME, 'Bonjour navigateur !', time() + 3600 * 24 * 30);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Exo php</title>
    <style>
        body {
            background-color: <?php echo $_COOKIE[COLOR_COOKIE]?>;
        }
    </style>
</head>
<body>
<?php
if (array_key_exists(COOKIE_NAME, $_COOKIE)){
    echo  $_COOKIE[COOKIE_NAME];
}else{
    echo 'Pas de cookie nomm�e ' . COOKIE_NAME . ' sur ce navigateur !';
}
if (array_key_exists(COLOR_COOKIE, $_COOKIE)){
    echo  $_COOKIE[COLOR_COOKIE];
}else{
    echo 'Pas de cookie nomm�e ' . COLOR_COOKIE . ' sur ce navigateur !';
}
?>
<form method="post">
    <input type="text" name="textname" value="text" />
    <input type="color" value="#fad345" name="backcolor">
    <input type="submit" value="Soumettre">
    <?php
    if (array_key_exists("textname", $_POST)){
        setcookie(COOKIE_NAME, $_POST["textname"], time() + 3600 * 24 * 30);
    }
    if (array_key_exists("backcolor", $_POST)){
        setcookie(COLOR_COOKIE, $_POST["backcolor"], time() + 3600 * 24 * 30);
    }
    ?>
</form>
</body>
</html>