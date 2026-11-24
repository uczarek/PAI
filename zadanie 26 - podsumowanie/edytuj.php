<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'nav.php' ?>

    <form method="POST" action="<?= basename($_SERVER['PHP_SELF'])?>" require>
        <h1>UPDATE</h1>

        <label for="id">Id</label>
        <input type ="number" id="id" name ="id" required>
        <br>

        <label for="tittle">Tytul:</label>
        <input type ="text" id="tittle" name ="tittle" required>
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
        if(isset($_POST['id']) 
            && isset($_POST['tittle']) 
            && isset($_POST['species']) 
            && isset($_POST['platform'])
            && isset($_POST['year'])
            && isset($_POST['grade']))
            {

            $id = $_POST["id"];
            $tittle = $_POST["tittle"];
            $species = $_POST["species"];
            $platform = $_POST["platform"];
            $year = $_POST["year"];
            $grade = $_POST["grade"];

            $sql_update = "UPDATE `gry` SET `tytul`='$tittle', `gatunek`='$species', `platforma`='$platform', `rok_wydania`='$year', `ocena`='$grade' WHERE `id`='$id'";

            if(mysqli_query($conn, $sql_update)){
                echo "Zaktualizowano rekord o id: " . $id;;
            }else{
                echo "Błąd aktualizacji: " . mysqli_error($conn);
            }

            mysqli_close($conn);

    }
    ?>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>