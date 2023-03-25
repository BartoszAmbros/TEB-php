<?php

// For

/* 
for (inicjalizacja; warunek; aktualizacja){
    kod do wykonania
}
*/

for($i = 0; $i < 5; $i++){
    var_dump($i);
}


// For na tablicy

$cinemaMovies = [
    'Joker',
    'Spiderman',
    'Szybcy i wściekli',
    'Władca pierścieni',
];

for($index = 0; $index < count($cinemaMovies); $index++){
    echo $cinemaMovies[$index] . '<br>';
}


// Pętla while i do while

/* 
while(warunekDoSprawdzenia){
    kod do wykonania
    AKTUALIZACJA
}
*/

$index = 0;
$moviesCount = count($cinemaMovies);
// while ($index < $moviesCount){
//     echo $cinemaMovies[$index] . '<br>';
//     $index++; // AKTUALIZACJA!
// }

do{
    echo $cinemaMovies[$index] . '<br>';
    $index++;
}while ($index < $moviesCount);


// Pętla foreach

/* 
foreach($array as $arrayElement){
    kod do wykonania
}
*/

foreach($cinemaMovies as $movie){
    // echo $movie . '<br>';
}

/* 
foreach ($array as $key => $value){
    ...
}
*/

foreach($cinemaMovies as $index => $movie){
    // echo $index + 1 . ':' . $movie . '<br>';
}

// Przykład z zagnieżdżoną tablicą

$movieDetails = [
    'title' => 'Tytuł Filmu',
    'director' => 'Jakis gość',
    'writers' => ['Gościu 1', 'Gościu 2'],
    'cast' => [
        'Nazwa postaci'=> 'Aktor pierwszy',
        'Nazwa postaci drugiej' => 'Aktor drugi',
        'Nazwa postaci trzeciej' => 'Aktor trzeci',
    ],
    'music' => 'Muzyczka',
];

// foreach($movieDetails as $role => $element) {
//     echo "$role: $element <br>";
// }
foreach($movieDetails as $role => $element){
    if(is_array($element)){
        foreach($element is $insideKey=> $insideValue){
            echo "$role: $insideKey -> $insideValue <br>";
        }
    }else {
        echo "$role: $element <br>";
    }
}