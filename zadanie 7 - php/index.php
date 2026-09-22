<?php
    //ZMIENNE
    $arr1 = [1,2,3,4,5];
    $arr2 = [6,7,8,9,10];
    $str1 = "kebab";

    //WYWOLANIA
    printArray($arr1);
    printArray($arr2);

    echo sumNumbers(6,7,23,1,23,4);
    echo "<br>";

    echo multiplyNumbers(9);
    echo "<br>";

    echo stringToUpper($str1);
    echo "<br>";

    wypiszJesliPierwsza(1, 100);
    echo "<br>";

    //Wyswietlanie tablicy
    function printArray($arr){
        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i];
        }
        echo "<br>";
    }

    //Zmienna liczba argumentow
    function sumNumbers(...$x){
        $sum = 0;

        for($i = 0; $i < count($x); $i++){
            $sum = $sum + $x[$i];
        }
        return $sum;
    }

    //Wartosc domyslna, wartosc domyslna funkcji
    function multiplyNumbers(int $a, int $b = 9): int{
        return $a * $b;
    }

    //Zmiana malych na duze litery
    function stringToUpper(string $str): string{
        return strtoupper($str);
    }

    
    //ZADANIE 1 - fucnkja sprawdzajaca czyPierwsza(), funkcja która wypisuje wszystkie liczby pierwsze z przedzialu
    function czyPierwsza(int $n): bool{
        if($n < 2){
            return false;
        }
        
        for($i = 2; $i <= sqrt($n); $i++){
            if($n % $i == 0){
                return false;
            }
        }

        return true;

    }

    function wypiszJesliPierwsza(int $poczatek = 1, int $koniec = 100){
        for($i = $poczatek; $i <= $koniec; $i++){
            if(czyPierwsza($i)){
                echo $i." ";
            }
        }
        echo "<br>";
    }


    //ZADANIE 2 - funkcja obliczStatystyki ona ma wywolywac funckje min, max, srednia, suma.
    function obliczStatystyki(array $liczby): array{
        

    }

    function obliczMin(array $arr){
        $min = 0;
        for($i = 0; $i <= count($arr)){
            if($i)
        }
    }

    function obliczMax(array $arr){
        
    } 

    function obliczSrednia(array $arr){
        
    }

    function obliczSume(array $arr){
        
    }

?>
