<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "warehouse";

    //Tworzenie polaczenia
    $conn = new mysqli($host, $username, $password, $database);

    if(!$conn){
        die("Połączenie się nie powiodło: " . $conn -> conect_error . "<br><br>");
    } else {
        echo "Połączenie się powiodło" . "<br><br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" require>
        <label for="name">Nazwa produktu:</label>
        <input type ="text" id="name" name ="name" required>
        <br>

        <label for="price">Cena:</label>
        <input type="number" id="price" name="price" required>
        <br>
        
        <label for="amount">Ilość sztuk:</label>
        <input type="number" id="amount" name="amount" required>
        <br>

        <button type="submit">Dodaj do koszyka!</button>
        <br><br>
    </form>

    <?php

        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
            $name = $_POST["name"];
            $amount = $_POST["amount"];
            $price = $_POST["price"];
            
            echo "Nazwa: " . $name . "<br>";
            echo "Ilość: " . $amount . "<br>";
            echo "Cena: " . $price . "<br>";

            //Tabela: Products
            //Pola: (int) id, (varchar) name, (double) price, (int) amount
            $sql = "INSERT INTO Products (name, amount, price) VALUES (?, ?, ?)";
            $stmt = $conn -> prepare($sql); //przygotowuje na polaczeniu zapytanie SQL
            $stmt -> bind_param("sid", $name, $amount, $price);
            $stmt -> execute();

            $stmt -> close();
            $conn -> close();

    }
    ?>
</body>
</html>