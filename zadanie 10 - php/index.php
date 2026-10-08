<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="./" method="POST"> 
        <label for="name">Imie: </label>
        <input type="text" id="name" name="name"><br>

        <label for="age">Wiek: </label>
        <input type="number" id="age" name="age"><br>

        <label for="sex">Plec: </label>
        <input type="radio" id="sex" name="sex" value="k"> Kobieta
        <input type="radio" id="sex" name="sex" value="m"> Mezczyzna <br><br>

        <label for="game">Ulubiona seria gier: </label><br>
        <input type="checkbox" name="game1" value="GTA"> GTA <br>
        <input type="checkbox" name="game2" value="FIFA"> FIFA <br>
        <input type="checkbox" name="game3" value="CS"> CS <br>
        <input type="checkbox" name="game4" value="COD"> Call of duty <br>
        
        <br><input type="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['age']) && //czy klucz istnieje
       !empty($_POST['name'] && !empty($_POST['age']))){ //czy ma wartosc
        echo $_POST['name'];
        echo "<br>";
        echo $_POST['age'];
    }else{
        echo "Prosze uzupelnic wszystkie pola!";
    }

    //weryfikacja plci
    if(isset($_POST['sex'])){
        if($_POST['sex'] == "m"){
            echo "<br>";
            echo "Mężczyzna";
        }else{
            echo "<br>";
            echo "Kobieta";
        }
    }


    //weryfikacja wybranej gry
    for($i = 1; $i <= 4; $i++){
        if(isset($_POST['game' . $i])){
        echo "<br>";
        echo $_POST['game' . $i];
    }
    }
?>