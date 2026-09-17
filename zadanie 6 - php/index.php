<?php
$array = [1,2,3,4,5];
$index_to_remove = 2;

unset($array[$index_to_remove]); // USUWANIE ELEMNTU Z TABLICY
var_dump($array);


for($i = 0; $i < count($array); $i++){
    $array[$i] = 0;
}

echo "<br>";
var_dump($array);


echo "<h1>Tablice dwuwymiarowe</h1>";
$array2D = [
    [1,2,3],
    [1,5,6],
    [7,8,9]
];

echo "<br>";
echo $array2D[0][0];
echo "<br><br>";

for($i = 0; $i < count($array2D); $i++){
    for($j = 0; $j < count($array2D[$i]); $j++){
        echo $array2D[$i][$j];
    }
    echo "<br>";
}

echo "<br><br>";

$osoby = [
    ["imie" => "Jan", "wiek" => 20],
    ["imie" => "Anna", "wiek" => 25],
    ["imie" => "Piotr", "wiek" => 20]
];

foreach($osoby as $wiesz){
    foreach($wiesz as $element){
        echo $element . " ";
    }
    echo "<br>";
}

echo "<br><br>";

for($i = 0; $i < count($osoby); $i++){
    foreach($osoby[$i] as $element){
        echo $element . " ";

    }
    echo "<br>";   
}

$array4x4 = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16],
];

echo "<br><br>";


//ZADANIE 1
//Za pomocą dwóch pętli for dodać diagonalnych wartosc 0;
for($i = 0; $i < count($array4x4); $i++){
    for($j = 0; $j < count($array4x4[$i]); $j++){
        if($i === $j){
            $array4x4[$i][$j] = 0;
       }
    }
}
printArray($array4x4);


//FUNKCJA DO WYŚWIETLANIA TABLICY 2D
function printArray($array2D){
    for($i = 0; $i < count($array2D); $i++){
            for($j = 0; $j < count($array2D[$i]); $j++){
                echo $array2D[$i][$j];
                echo " ";
        }
        echo "<br>";
    }
}


//ZADANIE 2
//Zsumuj wszystkie elementy tabilcy
$suma = 0;
for($i = 0; $i < count($array4x4); $i++){
    for($j = 0; $j < count($array4x4[$i]); $j++){
        $suma += $array4x4[$i][$j];
    }
}
echo "Suma wynosi: ".$suma."<br>";


//ZADANIE 3
//Zsumuj wszystkie wartosci w ramach jednej (pierwszej) kolumny, wartosc zapisz do tablcy jednowymiarowej.

$arr = [0,0,0,0];

for($i = 0; $i < count($array4x4); $i++){
    for($j = 0; $j < count($array4x4[$i]); $j++){
        if($array4x4[$i][$j] == $array4x4[$i][0]){

            $arr[0] += $array4x4[$i][$j];
        }

        if($array4x4[$i][$j] == $array4x4[$i][1]){
        $arr[1] += $array4x4[$i][$j];
        }

        if($array4x4[$i][$j] == $array4x4[$i][2]){
        $arr[2] += $array4x4[$i][$j];
        }

        if($array4x4[$i][$j] == $array4x4[$i][3]){
        $arr[3] += $array4x4[$i][$j];
        }
    }
}
echo $arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3];

?>