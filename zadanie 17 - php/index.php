<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="name">Nazwa produktu:</label>
        <input type ="text" id="name" name ="name">
        <br>

        <label for="price">Cena:</label>
        <input type="number" id="price" name="price">
        <br>

        
        <label for="amount">Ilość sztuk:</label>
        <input type="number" id="amount" name="amount">
        <br>

        <button type="submit">Dodaj do koszyka!</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
            $name = $_POST['name'];
            $price = (int) $_POST['price'];
            $amount = (int) $_POST['amount'];

            $_SESSION['koszyk'][] = [
                'name' => $name,
                'price' => $price,
                'amount' => $price
            ];
        }
    ?>

    <table border='1'>
        <tr>
            <th>Nazwa</th>
            <th>Cena</th>
            <th>Ilość</th>
            <th>Wartość</th>
        </tr>

        <?php
        if(!empty(($_SESSION['koszyk']))){
            foreach($_SESSION['koszyk'] as $product){
                echo "<tr>";
                echo "<td>" . $product['name'] . "</td>";
                echo "<td>" . $product['price'] . "</td>";
                echo "<td>" . $product['amount'] . "</td>";
                echo "<td>" . ((int) $product['price']) * ((int) $product['amount']) . "</td>";
                echo "</tr>";
            }
        }
        ?>

    </table>

    
</body>
</html>