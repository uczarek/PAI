<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="name">Imie:</label>
        <input type="text" name="name" id="name">
        <button>sprawdz</button>
    </form>

    <?php
        $names = ["Adam", "Kasia", "Marek", "Ola", "Tomek",];

        if($_GET['name'] != null){
            $nameToCheck = $_GET['name'];
            checkName($names, $nameToCheck);
        }else{
            echo "Prosze wspiac imie!";
        }

        function checkName($names, $nameToCheck){
            $nameIsFound = false;

            foreach($names as $name){
                if($name == (string) $nameToCheck){
                    $nameIsFound = true;
                    break;
                }
            }

            if($nameIsFound){
                echo "<p>Znaleziono imie: $nameToCheck!</p>";
            }else{
                echo "<p>Nie znaleziono imienia: $nameToCheck!</p>";
            }
        }

    

  
    ?>
</body>
</html>

