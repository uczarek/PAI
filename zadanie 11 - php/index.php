<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
    <body>
        <form action="./" method="GET"> 
            <label for="name">Imie: </label>
            <input type="text" id="name" name="name"><br>

            <label for="age">Wiek: </label>
            <input type="number" id="age" name="age"><br>

            <label for="ticket">Bilet</label>
            <select name="ticket" id="ticket">
                <option value="normal">Normalny</option>
                <option value="reduced">Ulgowy</option>
            </select><br>
            
            <input type="submit" value="Oblicz cene">
        </form>
    </body>
</html>


<?php
    $ticket = $_GET['ticket'];
    $age = $_GET['age'];
    $ticket_price = 0;

    if($ticket == "normal" && $age > 7){
        $ticket_price = 30;
    }else if($ticket == "reduced"){
        $ticket_price = 15;
    }else if($age <= 7){
        $ticket_price = 0;
    }

    echo "<br>";
    echo "Czesc, " . $_GET['name'] . "<br>";
    echo "Twoj wiek: " . $_GET['age'] . "<br>";
    echo "Rodzaj biletu: " . $_GET['ticket'] . "<br>";
    echo "Cena biletu: " . $ticket_price . "<br>";
 
?>