<?php
    require_once "db_connect.php"; //Sprawia ze jesli juz zalaczono plik nie bedzie juz go ponowanie zalaczac!
    // require "db_connect.php"; //W przypadku gdy dany plik np. nieistnieje include wyświetli Error!

    // include "db_connect.php"; //Jesli nie uda nam sie zalaczyc pliku, wyswietli Warning!
    // include_once "db_connect.php";//Sprawia ze jesli juz zalaczono plik nie bedzie juz go ponowanie zalaczac!
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista produktów</h1>    

    <table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Price</th>
    </tr>

    <?php
        $sql_1 = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql_1);

        while($row = $result -> fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
    ?>

    </table>

</body>
</html>