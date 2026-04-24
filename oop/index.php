<?php

require_once "animal.php";
require_once "Ape.php";
require_once "Frog.php";

$sheep = new Animal("shaun");
echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br><br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->name . "<br>";
echo $sungokong->legs . "<br>";
echo $sungokong->cold_blooded . "<br>";
$sungokong->yell();
echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->name . "<br>";
echo $kodok->legs . "<br>";
echo $kodok->cold_blooded . "<br>";
$kodok->jump();

