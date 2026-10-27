<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ZADANIE 1 -->
    <form>
        <label for = "name">Imie:</label>
        <input id="name" type="text" name="imie">
        <br>
        <button type="submit">Wyswietl</button>
    </form>
    <?php
    if(isset($_GET['imie'])){
        echo $_GET['imie'];
    }
    ?>
    <br><br>

    <!-- ZADANIE 2 -->
    <form method="POST">
        <label for = "age">Wiek:</label>
        <input id="age" type="number" name="wiek">
        <br>
        <button type="submit">Wyswietl</button>
    </form>

    <?php
        if(isset($_POST['wiek'])){
            echo $_POST['wiek'];
        }
    ?>
    <br><br>

    <!-- ZADANIE 3 -->
     <form method="post">
        <label for="name1">Nazwa produktu:</label>
        <input type="text" id="name1" name="name1">
        <br>

        <label for="price">Cena produktu:</label>
        <input type="number" id="price" name="price">
        <br>

        <label for="amount">Liczba sztuk:</label>
        <input type="number" id="amount" name="amount">
        <br>

        <button type="submit">Wyswietl</button>
    </form>

    <?php
        if(isset($_POST['name1']) && isset($_POST["price"]) && isset($_POST['amount'])){
            $name = $_POST['name1'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $totalCost = ((int) $price) * ((int) $amount);

            echo "Nazwa produktu: $name" . "<br>";
            echo "Cena jednostkowa: $price" . "<br>";
            echo "Ilosc sztuk: $amount" . "<br>";
            echo "Łączny koszt: $totalCost" . "<br>";
            }
    ?>

</body>
</html>

