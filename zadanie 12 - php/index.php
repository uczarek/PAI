<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>

    <body>
        <form method="POST">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
            <br>

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
            <br>

            <label for="password">Haslo:</label>
            <input type="password" name="password" id="password">
            <br>

            <label for="age">Wiek:</label>
            <input type="number" name="age" id="age">
            <br>

            <input type="checkbox" name="terms" id="terms">
            Akceptuje regulamin
            <br><br>

            <button type="submit" name="register">Zarejestruj sie
            </button>
        </form>
    </body>
</html>

<?php
if(isset($_POST["register"])){
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $age = $_POST["age"];

    if(strlen($login) < 3){
        echo "Login musi miec minimum 3 znaki" . "<br>";
    }

    if(!str_contains($email, "@")){
        echo "Podaj poprawny adres e-mail" . "<br>";
    }

    if(strlen($password) < 8){
        echo "Haslo musi miec minimum 8 znakow" . "<br>";
    }

    if($age < 18 || $age > 100){
        echo "Musisz miec od 18 do 100 lat" . "<br>";
    }

    if(!isset($_POST["terms"])){
        echo "Musisz zaakceptowac regulamin" . "<br>";
    }
}
?>