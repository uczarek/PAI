<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista</title>
</head>
<body>
    <?php include 'nav.php'?>

    <h1>Lista gier</h1>    

    <table border='1'>
    <tr>
        <th>ID</th>
        <th>Tytul</th>
        <th>Gatunek</th>
        <th>Platforma</th>
        <th>Rok wydania</th>
        <th>Ocena</th>
    </tr>

    <?php
        $sql_select = "SELECT * FROM gry";
        $result = mysqli_query($conn, $sql_select);

        while($row = $result -> fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['tittle'] . "</td>";
            echo "<td>" . $row['species'] . "</td>";
            echo "<td>" . $row['platform'] . "</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "<td>" . $row['grade'] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
    ?>

    </table>
</body>
</html>