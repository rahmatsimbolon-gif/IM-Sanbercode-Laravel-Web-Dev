<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($name) {
    $name = ucfirst(strtolower($name));
    echo "Halo " . $name . ", Selamat Datang di Sanbercode!<br>";
}

greetings("Bagas");
greetings("Wahyu");
greetings("rahmat");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($string) {
    $result = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $result .= $string[$i];
    }
    echo $result . "<br>";
    return $result;
}

reverseString("rahmat");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");

echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($string) {
    $reversed = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    if ($string === $reversed) {
        echo "true<br>";
        return true;
    } else {
        echo "false<br>";
        return false;
    }
}

palindrome("civic");
palindrome("nababan");
palindrome("jambaban");
palindrome("racecar");

echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

echo tentukan_nilai(98) . "<br>";
echo tentukan_nilai(76) . "<br>";
echo tentukan_nilai(67) . "<br>";
echo tentukan_nilai(43) . "<br>";

?>

</body>

</html>
