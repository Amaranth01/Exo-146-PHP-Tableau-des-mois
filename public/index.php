<?php

$array = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];

echo $array[2];

echo "<br><br>";

echo $array[5];

echo "<br><br>";

echo $array[7] = "août";

echo "<br><br>";

$hautDeFrance = [
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas-De-Calais",
    "80" => "Somme",
];

echo "<br><br>";

echo $hautDeFrance[59];

echo "<br><br>";

echo $hautDeFrance["51"] = "Marne";

echo "<br><br>";

foreach ($array as $month) {
    echo $month . "<br>";
}

echo "<br><br>";

foreach ($hautDeFrance as $departement) {
    echo $departement . "<br>";
}

echo "<br><br>";

foreach ($hautDeFrance as $key => $value) {
    echo "Le département $value a le numéro $key" . "<br>";
}