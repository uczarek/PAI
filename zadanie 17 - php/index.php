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
    <form method="POST" require>
        <label for="name">Nazwa produktu:</label>
        <input type ="text" id="name" name ="name" required>
        <br>

        <label for="price">Cena:</label>
        <input type="number" id="price" name="price" required>
        <br>
        
        <label for="amount">Ilość sztuk:</label>
        <input type="number" id="amount" name="amount" required>
        <br>

        <button type="submit">Dodaj do koszyka!</button>
        <br><br>
    </form>

    <?php
        if(isset($_POST['name']) &&
            isset($_POST['price']) && ((int) $_POST['price']) > 0 &&
            isset($_POST['amount']) && ((int) $_POST['amount']) > 0
            ){
                $name = strip_tags($_POST['name']);
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

    <?php
        $cartValue = 0;

        foreach($_SESSION['koszyk'] as $produkt){
            $cartValue += ((int) $product['price']) * ((int) $product['amount']);
        }

        echo "<p>Wartość koszyka: $cartValue</p>";

        if($cartValue > 500){
            echo "<p>Rabat wynosi: 10%</p>";
            echo "<p>Kwota do zaplaty: " . $cartValue * 0.9 . "</p>";
        } else {
            echo "<p>Rabat wynosi: 0%</p>";
            echo "<p>Kwota do zaplaty: $cartValue</p>";
        }
    ?>

    <form method="POST">
        <button type="submit" name="clearBtn">Wyczysc koszyk</button>
    </form>

    <?php
        if(isset($_POST['clearBtn'])){
            unset($_SESSION['koszyk']);
        }
    ?>
    
</body>
</html>