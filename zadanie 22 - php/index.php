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
        <h1>UPDATE</h1>

        <label for="name">ID</label>
        <input type ="number" id="id" name ="id" required>
        <br>

        <label for="name">Name:</label>
        <input type ="text" id="name" name ="name" required>
        <br>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required>
        <br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>
        <br>

        <button type="submit">Add product</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount']) && isset($_POST['id'])){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $amount = $_POST["amount"];
            $price = $_POST["price"];

            $sql_update = "UPDATE `products` SET `name`='$name', `price`='$price', `amount`='$amount' WHERE `id`='$id'";

            if(mysqli_query($conn, $sql_update)){
                echo "Zaktualizowano rekord o id: " . $id;;
            }else{
                echo "Błąd aktualizacji: " . mysqli_error($conn);
            }

            mysqli_close($conn);

    }
    ?>
</body>
</html>