<?php
    require_once "db_connect.php";
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
        <h1>DELETE</h1>

        <label for="name">ID</label>
        <input type ="number" id="id" name ="id" required>
        <br>

        <button type="submit">Delete product</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST['id'])){
            $id = $_POST["id"];
            $sql_delete = "DELETE FROM `products` WHERE `id`='$id'";

            if(mysqli_query($conn, $sql_delete)){
                echo "Usunięto rekord o id: " . $id;;
            }else{
                echo "Błąd usuwania: " . mysqli_error($conn);
            }

            mysqli_close($conn);

    }
    ?>
</body>
</html>