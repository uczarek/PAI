<?php
    $name ="username";
    $value = "Bartek";
    
    //setcookie(name, value, expire, path, domain, secure, httponly);
    //wymagane: name
    //reszta opcjonalna
    setcookie($name, $value, time() + (86400*30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$name])){
            echo "Ciastko: " . $name . " jest ustawione." . "<br>";
            echo "Wartosc: " . $_COOKIE[$name];
        } else {
            echo "Ciastko " . $name . " nie jest ustawione!";
        }

        //Modyfikacja
        setcookie("username", "", time()-3600);
        
        //usuwanie
        setcookie("username", "", time()-3600);

        //czy cookies sa wlaczone?
        if(count($_COOKIE) > 0){
            echo "Ciastka wlaczone";
        } else {
            echo "Ciastka wylaczone";
        }
    ?>
</body>
</html>