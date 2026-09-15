<?php
    //ZADANIE 1
    $num6 = 12;

    if($num6 % 2 == 0){
        echo "liczba jest parzysta.";
    }else{
        echo "liczba nie jest parzysta.";
    }
    echo "<br><br>";


    //ZADANIE 2
    $num1 = 2;
    $num2 = 4;

    if($num1 % $num2 != 0){
        echo "Liczby nie są przez siebie podzielne!";
    }else{
        echo "liczby są przez siebie podzielne.";
    }
     echo "<br><br>";


    //ZADANIE 3
    $num = 123;

    if($num <= 10 & $num >=0){
        echo "Liczba należy przedziału <1,10>";
    }else if($num >= 17 & $num <= 21){
        echo "Liczba należy przedziału <17,21>";
    }else{
        echo "Liczba nie należy do przedziałów!";
    }
     echo "<br><br>";


    //ZADANIE 4
    $num3 = 0;

    if($num3 == 0){
        echo "Liczba jest równa 0!";
    }else if($num0 < 0){
        echo "Liczba jest mniejsza od 0!";
    }else{
        echo "liczba jest wieksza od 0!";
    }
     echo "<br><br>";


    //ZADANIE 5
    $age = 12;

    if($age < 11){
        echo "dziecko!";
    }else if( $age >= 11 & $age <=17){
        echo "nastolatek!";
    }else{
        echo "dorosły!";
    }
     echo "<br><br>";


?>