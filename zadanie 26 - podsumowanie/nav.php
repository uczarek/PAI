<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php" class=<?= $currentPage == 'index.php' ? 'active' : ''?>>Opis</a>
        <a href="dodaj.php" class=<?= $currentPage == 'dodaj.php' ? 'active' : ''?>>Dodaj</a>
        <a href="edytuj.php" class=<?= $currentPage == 'edytuj.php' ? 'active' : ''?>>Edytuj</a>
        <a href="usun.php" class=<?= $currentPage == 'usun.php' ? 'active' : ''?>>Usun</a>
        <a href="lista.php" class=<?= $currentPage == 'lista.php' ? 'active' : ''?>>Lista</a>
    </nav>
</body>
</html>