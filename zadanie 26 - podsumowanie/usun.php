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
        <h1>DELETE</h1>

        <label for="name">ID</label>
        <input type ="number" id="id" name ="id" required>
        <br>

        <button type="submit">Delete</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST['id'])){
            $id = $_POST["id"];
            $sql_delete = "DELETE FROM `gry` WHERE `id`='$id'";

            if(mysqli_query($conn, $sql_delete)){
                echo "Usunięto rekord o id: " . $id;;
            }else{
                echo "Błąd usuwania: " . mysqli_error($conn);
            }

            mysqli_close($conn);

    }
    ?>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>