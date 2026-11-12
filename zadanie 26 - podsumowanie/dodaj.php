<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dodaj</title>
</head>
<body>
    <?php include 'nav.php'?>

    <form method="POST" action="<?= basename($_SERVER['PHP_SELF'])?>" require>
        <h1>INSERT</h1>

        <label for="title">Tytul:</label>
        <input type ="text" id="title" name ="title" required>
        <br>

        <label for="species">Gatunek:</label>
        <input type="text" id="species" name="species" required>
        <br>

        <label for="platform">Paltforma:</label>
        <input type="text" id="platform" name="platform" required>
        <br>

        <label for="year">Rok wydania:</label>
        <input type="number" id="year" name="year" required>
        <br>

        <label for="grade">Ocena:</label>
        <input type="number" id="grade" name="grade" required>
        <br>

        <button type="submit">Add</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST['title']) 
            && isset($_POST['species']) 
            && isset($_POST['platform'])
            && isset($_POST['year'])
            && isset($_POST['grade']))
            {

            $title = $_POST["title"];
            $species = $_POST["species"];
            $platform = $_POST["platform"];
            $year = $_POST["year"];
            $grade = $_POST["grade"];

            $sql_insert = "INSERT INTO `gry`(`tytul`, `gatunek`, `platforma`, `rok_wydania`, `ocena`) VALUES ('$title', '$species', '$platform', '$year', '$grade')";

            if(mysqli_query($conn, $sql_insert)){
                echo "Dodano rekord!";
            }else{
                echo "Błąd!" . mysqli_error($conn);
            }

            mysqli_close($conn);

    }
    ?>
</body>
</html>