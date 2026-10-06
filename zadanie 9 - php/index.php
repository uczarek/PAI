<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        Name: <input type="text" name="name"><br>
        Emial: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <br><br>

    <form method="get">
        Name: <input type="text" name="name1"><br>
        Emial: <input type="text" name="email1"><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
    echo $_POST["name"];
    echo "<br>";
    echo $_POST["email"];

    echo $_GET["name1"];
    echo "<br>";
    echo $_GET["email1"];

    //TWORZENIE STALYCH
    // define("PI", "3.14");
    // echo PI;

    //METODY HTTP
    //GET - pobieranie
    //POST - wysylanie (tez pobieranie) 
    //PUT - aktualizacja
    //DELTE - usuwanie

    //SUPERZMIENNE GLOBALNE
    // $_POST - informacja jest przesylyna jako request body (jako json)
    // $_GET - informacja przesylana jest w linku
    // $_SESSION 
?>