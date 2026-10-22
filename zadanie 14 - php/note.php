<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
    session_start(); //- zaczyna sesje
    $_SESSION[]; //- zmiennasuper globalna przechowujaca informacje o sesji.
    $_SESSION["login"] = "supcio_supnika"; //- przypisanie wartosci do tablicy assocjacyjnej
    unset(); //- usuwamy konkretna zmienna z tablicy;
    unset($_SESSION['login']); //- usuwa zmienna login z tablicy
    session_destroy(); //- usuwamy (niszczymy) wszysrtkie zmienne z sesji
    session_unset(); //- usuwanie zmiennej spod danego klucza

    // Jesli sesja nie istnieje - session_start() tworzy nowa,
    // jesli sesja istnieje - session_start() dolacza do istniejacej


?>